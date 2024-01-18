<?php

namespace App\Livewire\Contribuyentes;

use Livewire\Component;
use App\Models\Contribuyente;
use App\Livewire\Forms\Contribuyentes\ContribuyenteEditForm;
use LivewireUI\Modal\ModalComponent;

class DeleteContribuyente extends ModalComponent
{

    public $rowId;

    public function close() 
    {
    $this->closeModal(); 
    }

    public function destroy($postId)
    {
        $contribuyente = Contribuyente::find($postId);

        $contribuyente->delete();

        $this->close();

        $this->dispatch('registroCreado');

        $this->dispatch('post-action', 'Articulo eliminado');
    }

    public function render()
    {
        return view('livewire.Contribuyentes.delete-contribuyente');
    }
    
}
