<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;
use App\Models\Contacts;
use Livewire\Attributes\On;

class NewContact extends Component
{
    public bool $loading = false;
    public string $name = '';
    public string $cellphone = '';
    #[On('saves')]
    public function save()
    {
        $this->validate([
            'name' => ['required','min:5'],
            'cellphone' => ['required', 'min:16','max:16'],
        ],[],[
            'name' => __('Name'),
            'cellphone' => __('number')
        ]);
        $this->loading = true;

        $contact = new Contacts();
        $contact->name = $this->name;
        $contact->cellphone = $this->cellphone;
        $user = request()->user();
        $user->contacts()->save($contact);

        $this->reset(['name','cellphone']);
        $this->loading = false;
        $this->dispatch('contatc-created');
    }

    public function render()
    {
        return view('livewire.pages.new-contact')
            ->layout('layouts.app');
    }
}
