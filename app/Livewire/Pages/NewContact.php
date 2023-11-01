<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class NewContact extends Component
{
    public function render()
    {
        return view('livewire.pages.new-contact')
        ->layout('layouts.app');;
    }
}
