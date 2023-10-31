<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Contacts extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.contacts');
    }
}