<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{

    public $modulos = [];

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
