<?php

namespace App\Livewire\Users;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DeleteUser extends ModalComponent
{
    public $rowId;

    public function close() 
    {
    $this->closeModal(); 
    }

    public function destroy($postId)
    {
        $contribuyente = User::find($postId);

        $contribuyente->delete();

        $this->close();

        $this->dispatch('registroCreado');

        $this->dispatch('post-action', 'Articulo eliminado');
    }

    public function render()
    {
        return view('livewire.Users.delete-user');
    }
}
