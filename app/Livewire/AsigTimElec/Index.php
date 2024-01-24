<?php

namespace App\Livewire\AsigTimElec;

use App\Models\Contribuyente;
use Livewire\Attributes\On;
use Livewire\Component;


class Index extends Component
{
    
    public $cedula;
    public $exists = false;

    #[On('contrib-exists')]
    public function datoEnviado($dato) {
        $this->cedula = $dato;
        $this->exists = true;
    }

    #[On('clear-exists')]
    public function clearExists()
    {
        $this->exists = false;
    }

    #[On('contrib-create')]
    public function contribCreate($dato) {
        $this->cedula = $dato;
        $this->exists = true;
        $this->dispatch('tramite-save', $this->cedula, $this->exists);
    }
   
    public function generar()
    {
        $this->dispatch('tramite-save', $this->cedula, $this->exists);
    }
    

    public function render()
    {
        return view('livewire.AsigTimElec.index');
    }
}
