<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Contacts extends Component
{
    public $name = '';
    public function render()
    {
        return view('livewire.pages.contacts')->layout('layouts.app');
    }
}
