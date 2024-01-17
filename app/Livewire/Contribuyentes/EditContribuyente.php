<?php

namespace App\Livewire\Contribuyentes;

use App\Models\Contribuyente;
use App\Livewire\Contribuyentes\Forms\ContribuyenteEditForm;
use LivewireUI\Modal\ModalComponent;

class EditContribuyente extends ModalComponent
{    
    public ContribuyenteEditForm $contribuyenteEdit;

    public $contribuyentes;

    public $rowId;

    public $prefijo;

    public $cedula;

    public $nombre;

    public $nombre2nd;

    public $apellido;

    public $apellido2nd;

    public $direccion = '';

    public $telefono;


    public function mount()
    {

        $contribuyente = contribuyente::find($this->rowId);

        $this->prefijo = $contribuyente->prefijo;
        $this->cedula = $contribuyente->cedula;
        $this->nombre = $contribuyente->nombre;
        $this->apellido = $contribuyente->apellido;
        $this->direccion = $contribuyente->apellido;
        $this->telefono = $contribuyente->apellido;


    }

    // public function edit($contribuyenteId)
    // {
    //     $this->resetValidation();
    //     $this->ContribuyenteEdit->edit($contribuyenteId);
    // }

    public function update()
    {
        $this->ContribuyenteEdit->update();
        $this->contribuyentes = Contribuyente::all();

        $this->dispatch('Contribuyente-action', 'Articulo actualizado');
    }

    // public function clickCloseModal() 
    // {
    //     $this->closeModal(); 
    // }

    public function render()
    {
        return view('livewire.Contribuyentes.edit-contribuyente');
    }
}
