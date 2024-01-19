<?php

namespace App\Livewire\Contribuyentes;

use App\Models\Contribuyente;
use App\Livewire\Contribuyentes\Forms\ContribuyenteEditForm;
use LivewireUI\Modal\ModalComponent;
use WireElements\Traits\ClosesModals;


class EditContribuyente extends ModalComponent
{    
    public ContribuyenteEditForm $contribuyenteEdit;

    public $contribuyentes;

    public $rowId;

   

    public function mount()
    {
        
        $this->resetValidation();
        $this->contribuyenteEdit->edit($this->rowId);

    }

    public function close() 
    {
    $this->closeModal(); 
    }



    public function update()
    {
        //

        $this->contribuyenteEdit->update();


 
        $this->close();

        $this->dispatch('registroCreado');
        
    }



    public function render()
    {
        return view('livewire.Contribuyentes.edit-contribuyente');
    }
}
