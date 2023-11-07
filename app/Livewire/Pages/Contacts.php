<?php

namespace App\Livewire\Pages;

use App\Models\User;

use Livewire\Component;
use App\Models\Contacts as ContactsModel;
use WireUi\Traits\Actions;
use Livewire\WithPagination;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Contacts extends Component
{
    use WithPagination, Actions;

    public function updateContatc($contact)
    {
        $validator = Validator::make($contact, [
            'name' => ['required', 'min:5'],
            'cellphone' => ['required', 'min:16', 'max:17'],
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            $allErrors = $errors->all();
            $errorString = implode('<br>', $allErrors);
            $this->dialog()->warning('Atualização não realizada!', $errorString);
        }else{
            $new_contact = Auth::user()->contacts()->find($contact['id']);
            $new_contact->name = $contact['name'];
            $new_contact->cellphone =  $contact['cellphone'];
            $new_contact->save();
            $this->dialog()->success('Sucesso!', "Contato: {$new_contact->name} atualizado!");
        }
    }
    public function deleteContact($contact)
    {
        Auth::user()->contacts()->find($contact['id'])->delete();
        $this->dialog()->info('Sucesso!', "Contato: {$contact['name']} deletado!");
    }
    public function unlinkContactSystem($contact)
    {
        ContactsModel::where('user_id', Auth::id())
        ->where('user_system',$contact['id'])->delete();
        $this->dialog()->info('Sucesso!', "Contato: {$contact['name']} desvinculado!");
    }
    private function listContacts():array
    {
        $user = request()->user();
        return [
            'contacts' => $user->contacts()->paginate(10)->withQueryString(),
            'user_system' => $user->contactsSystem()->paginate(10, ['*'], 'user_system')->withQueryString()
        ];
    }
    public function render()
    {
        return view('livewire.pages.contacts', [
            ...$this->listContacts()
        ])->layout('layouts.app');
    }
}
