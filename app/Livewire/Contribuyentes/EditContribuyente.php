<?php

namespace App\Livewire\Contribuyentes;

use App\Models\Contribuyente;
use App\Livewire\Forms\Contribuyentes\ContribuyenteEditForm;
use LivewireUI\Modal\ModalComponent;

class EditContribuyente extends ModalComponent
{    
    public ContribuyenteEditForm $contribuyenteEdit;

    public $title = 'Actualizar contribuyente';
    public $submit = 'update';
    public $inputs = [
        [
            'name' => 'cedula',
            'type' => 'number',
            'lable' => 'Cedula',
            'placeholder' => 'Ingrese su cedula'
        ],
        [
            'name' => 'cedula',
            'type' => 'number',
            'lable' => 'Cedula',
            'placeholder' => 'Ingrese su cedula'
        ]

    ];
    public $buttonAction = 'actualizar';

    public $contribuyentes;

    public function actualizar()
    {
        echo "soy gay";
    }

    public function mount()
    {

        $this->contribuyentes = Contribuyente::all();

    }

    public function edit($contribuyenteId)
    {
        $this->resetValidation();
        $this->ContribuyenteEdit->edit($contribuyenteId);
    }

    public function update()
    {
        $this->ContribuyenteEdit->update();
        $this->contribuyentes = Contribuyente::all();

        // $this->dispatch('Contribuyente-action', 'Articulo actualizado');
    }

    public function clickCloseModal() 
    {
        $this->closeModal(); 
    }

    public function render()
    {
        return view('livewire.Contribuyentes.edit-contribuyente');
    }
}
