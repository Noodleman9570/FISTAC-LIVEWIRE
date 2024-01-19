<?php

namespace App\Livewire\Contribuyentes\Forms;

use App\Models\Contribuyente;
use Hamcrest\Type\IsInteger;
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


    //Atributtes
    public $prefijo = '';
    public $cedula;
    public $oldCedula;
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

            'cedula' => ['required', 'integer', 'between:100000,100000000',

            function ($attribute, $value, $fail) {

                if(($this->oldCedula != $value) && is_int($value))
                {

                    $existingContribuyente = Contribuyente::wwwwhere('cedula', $value)->first();

                    if ($existingContribuyente) {
                        $fail('La cédula ya está registrada en la base de datos.');
                    }
                }
            
                
            }

        
        ],

            'nombre' => 'required|alpha|min:3|max:25',

            'nombre2nd' => 'min:3|max:25',

            'apellido' => 'required|alpha|min:3|max:25',

            'apellido2nd' => 'min:3|max:25',

            'direccion' => 'required|min:10|max:100',

            'telefono' => ['required', 'regex:/^(0412|0414|0424|0416|0426|0234|0241|0251|0235|0271|0261|0271|0281|0291)\\d{7}$/'],

        ];
    }


    public function edit($contribuyenteId)
    {

        $this->contribuyenteId = $contribuyenteId;

        $this->resetValidation();

        $contribuyente = Contribuyente::find($this->contribuyenteId);

        $arrayNames =  $this->splitNames($contribuyente->nombre);
        $apellidoNames = $this->splitNames($contribuyente->apellido);
        
        $this->prefijo = $contribuyente->prefijo;
        $this->oldCedula = $contribuyente->cedula;
        $this->cedula = $contribuyente->cedula;
        $this->nombre = $arrayNames[0];
        $this->nombre2nd = $arrayNames[1];
        $this->apellido = $apellidoNames[0];
        $this->apellido2nd = $apellidoNames[1];
        $this->direccion = $contribuyente->direccion;
        $this->telefono = $contribuyente->telefono;


    }

    public function update()
    {

        $this->validate();

        $this->nombre = $this->nameSanitize($this->nombre);
        $this->nombre2nd = $this->nameSanitize($this->nombre2nd);
        $this->apellido = $this->nameSanitize($this->apellido);
        $this->apellido2nd = $this->nameSanitize($this->apellido2nd);

        $this->nombre .= ' ' . $this->nombre2nd;

        $this->apellido .= ' ' . $this->apellido2nd;

        $contribuyente = Contribuyente::find($this->contribuyenteId);
        $contribuyente->update(
            $this->only('prefijo', 'cedula', 'nombre', 'apellido', 'direccion', 'telefono')
        );

        
        
    }

}
