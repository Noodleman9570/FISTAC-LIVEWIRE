<?php

namespace App\Livewire\AsigTimElec\Forms;

use Livewire\Component;
use App\Helpers\Helpers;
use App\Livewire\Contribuyentes\Forms\ContribuyenteCreateForm;
use Livewire\Attributes\On;
use App\Models\Contribuyente;
use Livewire\Attributes\Validate;


class ContribForm extends Component
{

    public ContribuyenteCreateForm $contribuyenteCreate;
    public $contribuyente;
    public $disabled = false;
    public $contribuyenteExists = false;



    #[On('contrib-save')]
    public function save()
    {
        $cedula = $this->contribuyenteCreate->cedula;
        $this->contribuyenteCreate->save();
        $this->dispatch('contrib-create', $cedula);
    }

    public function clearForm(){
        $this->contribuyenteCreate->nombre = '';
        $this->contribuyenteCreate->nombre2nd = '';
        $this->contribuyenteCreate->apellido = '';
        $this->contribuyenteCreate->apellido2nd = '';
        $this->contribuyenteCreate->direccion = '';
        $this->contribuyenteCreate->telefono = '';
        $this->contribuyenteCreate->fecha_nac = '';
        $this->dispatch('clear-exists');
    }

    #[On('selectChanged')]
    public function contribSearch()
    {
        
        if (is_numeric($this->contribuyenteCreate->cedula) && $this->contribuyenteCreate->prefijo && ($this->contribuyenteCreate->cedula < 99999999)) {
            $contribuyente = Contribuyente::where('cedula', $this->contribuyenteCreate->cedula)->where('prefijo', $this->contribuyenteCreate->prefijo)->first();
            if ($contribuyente) {
                $arrayNames =  Helpers::splitNames($contribuyente->nombre);
                $apellidoNames = Helpers::splitNames($contribuyente->apellido);

                $this->contribuyenteCreate->prefijo = $contribuyente->prefijo;
                $this->contribuyenteCreate->nombre = $arrayNames[0];
                $this->contribuyenteCreate->nombre2nd = $arrayNames[1];
                $this->contribuyenteCreate->apellido = $apellidoNames[0];
                $this->contribuyenteCreate->apellido2nd = $apellidoNames[1];
                $this->contribuyenteCreate->direccion = $contribuyente->direccion;
                $this->contribuyenteCreate->telefono = $contribuyente->telefono;
                $this->contribuyenteCreate->fecha_nac = $contribuyente->fecha_nac;
                $this->disabled = true;
                $this->contribuyenteExists = true;
                $this->dispatch('contrib-exists', $this->contribuyenteCreate->cedula); 
            }else{
                $this->clearForm();
                $this->disabled = false;
                $this->contribuyenteExists = false;
            }
        }else{
            $this->clearForm();
            $this->disabled = false;
            $this->contribuyenteExists = false;
        }
        
    }
    
    public function render()
    {
        return view('livewire.AsigTimElec.forms.contrib-form');
    }
}
