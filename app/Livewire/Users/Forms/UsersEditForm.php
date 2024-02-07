<?php

namespace App\Livewire\Users\Forms;

use App\Models\Punto;
use App\Models\User;
use App\Models\Role;
use Hamcrest\Type\IsInteger;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UsersEditForm extends Form
{
    public $userId = '';
    public $refresh = false;


    //Atributtes
    public $name;
    public $email;
    public $oldEmail;
    public $roles = [];
    public $puntos = [];
    public $role_id;
    public $punto_id;

    public function rules()
    {
        return [

            'name' => 'required|alpha',
            
            'email' => [
                'required',
                'regex:/^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/',
                'string',
                'lowercase',
                'max:255',
                function ($attribute, $value, $fail) {

                    if(($this->oldEmail != $value) && is_int($value))
                    {
    
                        $existingContribuyente = User::where('email', $value)->first();
    
                        if ($existingContribuyente) {
                            $fail('El correo electrónico ya se encuentra registrado.');
                        }
                    }
                
                    
                
                }
            ],

        ];
    }

    public function edit($userId)
    {
        $this->userId = $userId;

        $this->resetValidation();
        $this->roles = Role::all();
        $this->puntos = Punto::all();
        $user = User::find($this->userId);

        $this->name = $user->name;
        $this->email = $user->email;
        $this->role_id = $user->role_id;
        $this->punto_id = $user->punto_id;



    }

    public function update()
    {

        $this->validate();

        $user = User::find($this->userId);
        $user->update(
            $this->only('name', 'email', 'role_id')
        );

        
        
    }
}
