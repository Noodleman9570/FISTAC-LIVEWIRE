<?php

namespace App\Livewire\Contribuyentes;

use Livewire\Component;
use App\Models\Contribuyente;
use App\Livewire\Forms\Contribuyentes\ContribuyenteEditForm;
use LivewireUI\Modal\ModalComponent;

class DeleteContribuyente extends ModalComponent
{
    public function render()
    {
        return view('livewire.Contribuyentes.delete-contribuyente');
    }
    
}
