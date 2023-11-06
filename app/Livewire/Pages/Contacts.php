<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Contacts extends Component
{
    use WithPagination;
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
