<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class CreatePost extends Component
{

    public $sapo;
    public $name, $email;

    public function mount(User $user){
        $this->fill(
            $user->only(['name', 'email'])
        );
    }

    public function save(){
        
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
