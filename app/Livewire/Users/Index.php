<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use App\Livewire\Users\Forms\UsersCreateForm;


class Index extends Component
{

    public UsersCreateForm $userCreate;

    public $qr;
    public $users;
    public $req = true;
    public $req2 = true;

    public function create()
    {
        $this->userCreate->create();
    }

    public function mount()
    {
        
        
        
    }


    public function save()
    {
        $this->userCreate->save();
        // $this->user = User::all();
        $this->dispatch('post-action', 'Nuevo articulo creado');
        $this->dispatch('registroCreado');
    }

    public function reqSwitch()
    {

        $this->req = !$this->req;
    }
    public function clickCloseModal()
    {
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.Users.index');
    }
}
