<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Contacts;
use App\Models\User;
use App\Traits\Toast;
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

    // public function listContacts(type $ = null)
    // {
    //     # code...
    // }
    public function render()
    {
        return view('livewire.pages.new-contact', [
            'users' => User::paginate(10),
        ])
            ->layout('layouts.app');
    }
}
