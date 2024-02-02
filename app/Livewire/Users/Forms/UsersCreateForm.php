<?php

namespace App\Livewire\Users\Forms;

use App\Models\Role;
use Illuminate\Support\Str;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rules;
use Livewire\Form;

class UsersCreateForm extends Form
{
    public $open = false;

    //Atributtes
    #[Validate]
    public $name;
    #[Validate]
    public $email;
    #[Validate]
    public $password;
    #[Validate]
    public $password_confirmation = '';
    #[Validate]
    public $roles = [];
    #[Validate]
    public $role_id = '';

    public function rules()
    {
        return [

            'name' => 'required|alpha|min:3|max:25',

            'email' => ['required', 'numeric', 'between:100000,100000000', 'unique:' . User::class],

            'role_id' => 'required',
            
            'email' => [
                'required',
                'regex:/^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/',
                'string',
                'lowercase',
                'max:255',
                function ($attribute, $value, $fail) {
                    $existingEmail = User::where('email', $value)->first();
                    if ($existingEmail) {
                        $fail('El correo ya está registrada en la base de datos.');
                    }
                }
            ],
            'password' => ['required', 'string', 'min:8', 'max:40', Rules\Password::defaults()],
            'password_confirmation' => 'same:password'

        ];
    }

    public function create()
    {
        $this->open = true;
        $this->roles = Role::all();
    }

    public function save()
    {
        $this->validate();

        $apiToken = null;
        if ($this->role_id == 3) {
            $apiToken = Str::random(60); 
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => $this->role_id,
            'api_token' => $apiToken,
        ]);

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
