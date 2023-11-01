<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class NewContact extends Component
{
    public $loading = false;
    public function save(){
       $this->loading = true;
    }

    public function render()
    {
        return view('livewire.pages.new-contact')
        ->layout('layouts.app');
    }
}
