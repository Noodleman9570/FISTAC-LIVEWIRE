<?php

namespace App\Livewire\AsigTimElec;

use App\Models\Contribuyente;
use Livewire\Attributes\On;
use Livewire\Component;


class Index extends Component
{

    public $cedula;

    #[On('contrib-exists')]
    public function datoEnviado($dato) {
        $this->cedula = $dato;
    }
   
    public function generar()
    {
        $this->dispatch('tramite-save', $this->cedula);
    }
    

    public function render()
    {
        return view('livewire.AsigTimElec.index');
    }
}
