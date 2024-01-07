<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{

    public $count = 0;
    public $cant = 0;

    public function edit(){
        
    }


    public function decrement(){
        $this->count -= $this->cant;
    }

    public function increment(){
        $this->count += $this->cant;
    }
    
    public function render()
    {
        return view('livewire.contador');
    }
}
