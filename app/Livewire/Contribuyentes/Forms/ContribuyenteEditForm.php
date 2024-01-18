<?php

namespace App\Livewire\Contribuyentes\Forms;

use App\Models\Contribuyente;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContribuyenteEditForm extends Form
{
    public $contribuyenteId = '';
    public $open = false;
    public $refresh = false;
    // protected $listeners = ['actualiza' => 'refresh'];

    public $prefijo = '';

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


    // public function edit($contribuyenteId)
    // {

    //     $this->open = true;
    //     $this->contribuyenteId=$contribuyenteId;

    //     $this->contribuyenteId = $contribuyenteId;

    //     $contribuyente = contribuyente::find($contribuyenteId);

    //     $this->cedula = $contribuyente->cedula;
    //     $this->nombre = $contribuyente->nombre;
    //     $this->apellido = $contribuyente->apellido;
    //     $this->direccion = $contribuyente->apellido;
    //     $this->telefono = $contribuyente->apellido;

    // }

    // public function update()
    // {

        
    // }


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
