<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Livewire\Users\Forms\UsersEditForm;
use LivewireUI\Modal\ModalComponent;
use WireElements\Traits\ClosesModals;

class EditUser extends ModalComponent
{

    public UsersEditForm $userEdit;

    public $users;

    public $rowId;

    public function mount()
    {
        $this->resetValidation();
        $this->userEdit->edit($this->rowId);

    }

    public function close() 
    {
        $this->closeModal(); 
    }

    public function update()
    {

        $this->userEdit->update();

        $this->close();

        $this->dispatch('registroCreado');
        
    }

    public function render()
    {
        return view('livewire.Users.edit-user');
    }
}
