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

    public function rules()
    {
        return [

            'prefijo' => 'required',

            'cedula' => ['required', 'numeric', 'between:100000,100000000', 'unique:' . Contribuyente::class],

            'nombre' => 'required|alpha|min:3|max:25',

            'nombre2nd' => 'min:3|max:25',

            'apellido' => 'required|alpha|min:3|max:25',

            'apellido2nd' => 'min:3|max:25',

            'direccion' => 'required|min:10|max:100',

            'telefono' => ['required', 'regex:/^(0412|0414|0424|0416|0426|0234|0241|0251|0235|0271|0261|0271|0281|0291)\\d{7}$/'],

        ];
    }

    public function mount()
    {
        $this->resetValidation();

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
        // $this->dispatchBrowserEvent('actualiza');
        // dd($this->cedula);
        // $this->validate();

        $this->nombre = $this->contribuyenteEdit::nameSanitize($this->nombre);
        $this->nombre2nd = $this->contribuyenteEdit::nameSanitize($this->nombre2nd);
        $this->apellido = $this->contribuyenteEdit::nameSanitize($this->apellido);
        $this->apellido2nd = $this->contribuyenteEdit::nameSanitize($this->apellido2nd);

        $this->nombre .= ' ' . $this->nombre2nd;

        $this->apellido .= ' ' . $this->apellido2nd;

        $contribuyente = Contribuyente::find($this->rowId);
        $contribuyente->update(
            $this->only('cedula', 'nombre', 'apellido', 'direccion', 'telefono')
        );

        $this->reset();
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
