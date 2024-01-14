<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Modulo;

class Navigation extends Component
{

    public $modulos = [];

    public function mount()
    {
        $this->modulos = Modulo::all();
    }

    public function render()
    {
        return view('livewire.layout.navigation');
    }
}
