<?php

namespace App\Livewire;

use Livewire\Component;

class Paises extends Component
{

    public $open = true;

    public $paises = [
        'Venezuela',
        'Argentia',
        'USA',
        'Brasil',
        'Japón'
    ];

    public $pais;

    public $count = 0;

    public $active;

    public function save(){
        array_push($this->paises, $this->pais);
        $this->reset(['pais']);
    }

    public function delete($index){
        unset($this->paises[$index]);
    }

    public function changeActive($pais){
        $this->active = $pais;
    }

    public function increment(){
        $this->count++;
    }

    public function resetear(){
        $this->count = 0;
    }

    public function render()
    {
        return view('livewire.paises');
    }
}
