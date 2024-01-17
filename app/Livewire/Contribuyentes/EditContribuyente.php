<?php

namespace App\Livewire\Contribuyentes;

use App\Models\Contribuyente;
use App\Livewire\Contribuyentes\Forms\ContribuyenteEditForm;
use LivewireUI\Modal\ModalComponent;
use WireElements\Traits\ClosesModals;


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

        $contribuyente = Contribuyente::find($this->rowId);

        $arrayNames =  $this->contribuyenteEdit::splitNames($contribuyente->nombre);
        $apellidoNames = $this->contribuyenteEdit::splitNames($contribuyente->apellido);
        

        $this->prefijo = $contribuyente->prefijo;
        $this->cedula = $contribuyente->cedula;
        $this->nombre = $arrayNames[0];
        $this->nombre2nd = $arrayNames[1];
        $this->apellido = $apellidoNames[0];
        $this->apellido2nd = $apellidoNames[1];
        $this->direccion = $contribuyente->direccion;
        $this->telefono = $contribuyente->telefono;


    }

    public function close() 
    {
    $this->closeModal(); 
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
