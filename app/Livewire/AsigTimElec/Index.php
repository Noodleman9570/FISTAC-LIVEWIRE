<?php

namespace App\Livewire\AsigTimElec;
use App\Livewire\Contribuyentes\Forms\ContribuyenteCreateForm;
use App\Models\Contribuyente;
use Livewire\Component;

class Index extends Component
{
    public ContribuyenteCreateForm $contribuyenteCreate;
    public $contribuyente;

    public function contribSearch()
    {
        $contribuyente = Contribuyente::where('cedula', $this->contribuyenteCreate->cedula)->first();
        if ($contribuyente) {
            $this->contribuyenteCreate->prefijo = $contribuyente->prefijo;
            $this->contribuyenteCreate->nombre = $contribuyente->nombre;
            $this->contribuyenteCreate->apellido = $contribuyente->apellido;
            $this->contribuyenteCreate->direccion = $contribuyente->direccion;
            $this->contribuyenteCreate->telefono = $contribuyente->telefono;
        }else{
            return null;
        }
    }

    public function render()
    {
        return view('livewire.AsigTimElec.index');
    }
}
