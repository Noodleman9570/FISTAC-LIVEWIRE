<?php

namespace App\Livewire\AsigTimElec\Forms;

use App\Models\Categoria;
use App\Models\ConceptoTributo;
use App\Models\EnteTramite;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Collection;

class TramiteForm extends Component
{

    public $categorias = [];
    public $concep_tributos = [];
    public $ente_tramites = [];
    public $selectedCategoria = '';
    public $selectedConcepTributos = '';
    public $selectedEnteTramite = '';

    public function mount(){
        $this->categorias = Categoria::all();
    }

    
    public function updatedSelectedCategoria()
    {

        $this->concep_tributos = ConceptoTributo::where('categoria_id', $this->selectedCategoria)->get();
        $this->ente_tramites = [];
    }

    public function updatedSelectedConcepTributos()
    {
        $this->ente_tramites = EnteTramite::where('concepto_tributo_id', $this->selectedConcepTributos)->get();
    }

    public function render()
    {

        return view('livewire.AsigTimElec.forms.tramite-form');
    }
}
