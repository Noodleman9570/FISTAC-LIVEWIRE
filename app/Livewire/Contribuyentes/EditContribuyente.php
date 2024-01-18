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

    // public $prefijo;

    // public $cedula;

    // public $nombre;

    // public $nombre2nd;

    // public $apellido;

    // public $apellido2nd;

    // public $direccion = '';

    // public $telefono;

    // public function rules()
    // {
    //     return [

    //         'prefijo' => 'required',

    //         'cedula' => ['required', 'numeric', 'between:100000,100000000', 'unique:' . Contribuyente::class],

    //         'nombre' => 'required|alpha|min:3|max:25',

    //         'nombre2nd' => 'min:3|max:25',

    //         'apellido' => 'required|alpha|min:3|max:25',

    //         'apellido2nd' => 'min:3|max:25',

    //         'direccion' => 'required|min:10|max:100',

    //         'telefono' => ['required', 'regex:/^(0412|0414|0424|0416|0426|0234|0241|0251|0235|0271|0261|0271|0281|0291)\\d{7}$/'],

    //     ];
    // }

    public function mount()
    {
        
        $this->resetValidation();
        $this->contribuyenteEdit->edit($this->rowId);

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
        //

        $this->contribuyenteEdit->update();


 
        $this->close();

        $this->dispatch('registroCreado');
        
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
