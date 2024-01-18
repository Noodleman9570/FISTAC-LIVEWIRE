<?php

namespace App\Livewire\Contribuyentes;

use Livewire\Component;
use App\Models\Contribuyente;
use App\Livewire\Contribuyentes\Forms\ContribuyenteCreateForm;
use App\Livewire\Contribuyentes\Forms\ContribuyenteEditForm;
use LivewireUI\Modal\ModalComponent;

class Index extends Component
{
    // public ContribuyenteEditForm $contribuyenteEdit;

    public ContribuyenteCreateForm $contribuyenteCreate;

    public $contribuyentes;
    public $req = true;
    public $req2 = true;



    public function mount()
    {

        $this->contribuyentes = Contribuyente::all();

    }

    public function create()
    {

        $this->contribuyenteCreate->create();
    }

    public function save()
    {
        $this->contribuyenteCreate->save();
        // $this->contribuyente = Contribuyente::all();

        $this->dispatch('post-action', 'Nuevo articulo creado');
        $this->dispatch('registroCreado');
    }

    public function reqSwitch()
    {

        $this->req = !$this->req;

    }

    // public function edit($contribuyenteId)
    // {
    //     $this->resetValidation();
    //     $this->ContribuyenteEdit->edit($contribuyenteId);
    // }

    // public function update()
    // {
    //     $this->ContribuyenteEdit->update();
    //     $this->contribuyentes = Contribuyente::all();

    //     // $this->dispatch('Contribuyente-action', 'Articulo actualizado');
    // }

    public function clickCloseModal() 
    {
        $this->closeModal(); 
    }

    public function render()
    {
        return view('livewire.Contribuyentes.index');
    }
}
