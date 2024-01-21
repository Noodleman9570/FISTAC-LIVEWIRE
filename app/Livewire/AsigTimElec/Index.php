<?php

namespace App\Livewire\AsigTimElec;
use App\Livewire\Contribuyentes\Forms\ContribuyenteCreateForm;
use App\Models\Contribuyente;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public ContribuyenteCreateForm $contribuyenteCreate;
    public $contribuyente;
    public $disabled = false;

    public function clearForm(){
        $this->contribuyenteCreate->nombre = '';
        $this->contribuyenteCreate->nombre2nd = '';
        $this->contribuyenteCreate->apellido = '';
        $this->contribuyenteCreate->apellido2nd = '';
        $this->contribuyenteCreate->direccion = '';
        $this->contribuyenteCreate->telefono = '';
    }

    #[On('selectChanged')]
    public function contribSearch()
    {
        if (is_numeric($this->contribuyenteCreate->cedula) && $this->contribuyenteCreate->prefijo && ($this->contribuyenteCreate->cedula < 99999999)) {
            $contribuyente = Contribuyente::where('cedula', $this->contribuyenteCreate->cedula)->where('prefijo', $this->contribuyenteCreate->prefijo)->first();
            if ($contribuyente) {
                $arrayNames =  $this->contribuyenteCreate->splitNames($contribuyente->nombre);
                $apellidoNames = $this->contribuyenteCreate->splitNames($contribuyente->apellido);

                $this->contribuyenteCreate->prefijo = $contribuyente->prefijo;
                $this->contribuyenteCreate->nombre = $arrayNames[0];
                $this->contribuyenteCreate->nombre2nd = $arrayNames[1];
                $this->contribuyenteCreate->apellido = $apellidoNames[0];
                $this->contribuyenteCreate->apellido2nd = $apellidoNames[1];
                $this->contribuyenteCreate->direccion = $contribuyente->direccion;
                $this->contribuyenteCreate->telefono = $contribuyente->telefono;
                $this->disabled = true;
            }else{
                $this->clearForm();
                $this->disabled = false;
            }
        }else{
            $this->clearForm();
            $this->disabled = false;
        }
        
    }

    public function render()
    {
        return view('livewire.AsigTimElec.index');
    }
}
