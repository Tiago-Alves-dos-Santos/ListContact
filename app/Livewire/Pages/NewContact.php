<?php

namespace App\Livewire\Pages;

use App\Models\User;
use App\Traits\Toast;
use Livewire\Component;
use App\Models\Contacts;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class NewContact extends Component
{
    use Toast, WithPagination;
    public bool $loading = false;
    public string $name = '';
    public string $cellphone = '';

    public function save()
    {
        $this->validate([
            'name' => ['required', 'min:5'],
            'cellphone' => ['required', 'min:16', 'max:17'],
        ], [], [
            'name' => __('Name'),
            'cellphone' => __('number')
        ]);
        try {

            $this->loading = true;

            $contact = new Contacts();
            $contact->name = $this->name;
            $contact->cellphone = $this->cellphone;
            $user = request()->user();
            $user->contacts()->save($contact);

            $this->reset(['name', 'cellphone']);
            $this->loading = false;
            $this->messageInfo('Cadastrado com sucesso');
            $this->dispatch('contatc-created');
        } catch (\Exception $e) {
            $this->messageInfo($e->getMessage());
            $this->loading = false;
            $this->dispatch('contatc-created');
        }
    }
    #[On('system_contact')]
    public function addContatcOfSystem($user)
    {

        try {
            Contacts::create([
                'user_id' => Auth::id(),
                'user_system' => $user['_id']
            ]);
            $this->messageInfo('Adcionado com sucesso');
            $this->dispatch('contatc-created');
        } catch (\Exception $e) {
            $this->messageInfo($e->getMessage());
            $this->dispatch('contatc-created');
        }
    }
    public function listContacts()
    {
        $user = request()->user();
        $query = User::query();
        $query->where('_id','!=',Auth::id());
        if(!$user->contactsSystem->isEmpty()){
            $list_contatcs = $user->contactsSystem()->pluck('user_system');
            $query->whereNotIn('_id', $list_contatcs);
        }
        return $query->paginate(10);
    }
    public function render()
    {
        return view('livewire.pages.new-contact', [
            'users' => $this->listContacts(),
        ])->layout('layouts.app');
    }
}
