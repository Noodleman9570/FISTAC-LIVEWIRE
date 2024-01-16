<?php

namespace App\Livewire\Contribuyentes\Forms;

use App\Models\Contribuyente;
use Livewire\Attributes\Validate;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ContribuyenteCreateForm extends Form
{
    public $req = true;
    public $open = false;

    public $prefijo = '';

    public $cedula;

    public $nombre1st;

    public $nombre;

    public $apellido;

    public $nombre2nd;

    public $apellido1st;

    public $apellido2nd;

    public $direccion = '';

    public $telefono;

    public function rules()
{
  return [

    'prefijo' => 'required',
    
    'cedula' => 'required|numeric|between:100000,100000000',

    'nombre1st' => 'required|alpha|min:3|max:25',

    'nombre2nd' => 'nullable|min:3|max:25', 

    'nombre' => 'nullable|min:3|max:25', 

    'apellido' => 'nullable|min:3|max:25', 

    'apellido1st' => 'required|alpha|min:3|max:25',

    'apellido2nd' => 'nullable|min:3|max:25',

    'direccion' => 'required|min:10|max:100',

    'telefono' => ['required', 'regex:/^(0412|0414|0424|0416|0426|0234|0241|0251|0235|0271|0261|0271|0281|0291)\\d{7}$/'],

  ];
}

    public function reqSwitch()
    {
        
        $this->req = !$this->req;

    }

    public function create()
    {
        $this->open = true;
    }

    

    public function save ()
    {

        $this->nombre1st = self::nameSanitize($this->nombre1st);
        $this->nombre2nd = self::nameSanitize($this->nombre2nd);
        $this->apellido1st = self::nameSanitize($this->apellido1st);
        $this->apellido2nd = self::nameSanitize($this->apellido2nd);

        $this->nombre .= ' '.$this->nombre2nd;

        $this->apellido .= ' '.$this->apellido2nd;


        $this->validate();

        


        $contribuyente = Contribuyente::create(
            $this->only('prefijo','cedula', 'nombre', 'apellido', 'direccion', 'telefono')
        );


        $this->reset();
    }

    protected function messages() {
        return [
        'category_id.required' => 'La categoría es requerida',
        'tags.required' => 'Las etiquetas son requeridas',
        ];
    }

}
