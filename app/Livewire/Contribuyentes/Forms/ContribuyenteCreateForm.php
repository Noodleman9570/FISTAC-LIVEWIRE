<?php

namespace App\Livewire\Contribuyentes\Forms;

use App\Models\Contribuyente;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContribuyenteCreateForm extends Form
{
    public $open = false;

    //Atributtes
    #[Validate]
    public $prefijo = '';
    public $cedula;
    public $nombre = '';
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



    public function create()
    {
        $this->open = true;
    }



    public function save()
    {

        $this->validate();

        $this->nombre = self::nameSanitize($this->nombre);
        $this->nombre2nd = self::nameSanitize($this->nombre2nd);
        $this->apellido = self::nameSanitize($this->apellido);
        $this->apellido2nd = self::nameSanitize($this->apellido2nd);

        $this->nombre .= ' ' . $this->nombre2nd;

        $this->apellido .= ' ' . $this->apellido2nd;

        $contribuyente = Contribuyente::create(
            $this->only('prefijo', 'cedula', 'nombre', 'apellido', 'direccion', 'telefono')
        );


        $this->reset();
    }

    protected function messages()
    {
        return [
            'category_id.required' => 'La categoría es requerida',
            'tags.required' => 'Las etiquetas son requeridas',
        ];
    }
}
