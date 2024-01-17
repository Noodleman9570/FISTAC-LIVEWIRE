<?php

namespace App\Livewire\Contribuyentes\Forms;

use App\Models\Contribuyente;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContribuyenteEditForm extends Form
{
    public $contribuyenteId = '';
    public $open = false;

    #[Rule('required')]
    public $cedula;

    #[Rule('required')]
    public $nombre;

    #[Rule('required')]
    public $apellido = '';
    
    #[Rule('required')]
    public $direccion = '';

    #[Rule('required')]
    public $telefono = '';


    public function edit($contribuyenteId)
    {

        $this->open = true;
        $this->contribuyenteId=$contribuyenteId;

        $this->contribuyenteId = $contribuyenteId;

        $contribuyente = contribuyente::find($contribuyenteId);

        $this->cedula = $contribuyente->cedula;
        $this->nombre = $contribuyente->nombre;
        $this->apellido = $contribuyente->apellido;
        $this->direccion = $contribuyente->apellido;
        $this->telefono = $contribuyente->apellido;

    }

    public function update()
    {

        $this->validate();
        $contribuyente = contribuyente::find($this->contribuyenteId);

        $contribuyente->update(
            $this->only('cedula', 'nombre', 'apellido', 'direccion', 'telefono')
        );

        $this->reset();
    }


    // public function save ()
    // {
    //     $this->validate();

    //     $contribuyente = contribuyente::create(
    //         $this->only('title','content','category_id')
    //     );

    //     $contribuyente->tags()->attach($this->tags);

    //     $this->reset();
    // }
}
