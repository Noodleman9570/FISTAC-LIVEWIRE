<?php

namespace App\Livewire\AsigTimElec\Forms;

use App\Models\Categoria;
use App\Models\ConceptoTributo;
use App\Models\Contribuyente;
use App\Models\EnteTramite;
use App\Models\Tramite;
use Livewire\Attributes\On;
use Livewire\Component;

class TramiteForm extends Component
{

    
    public $categorias = [];
    public $concep_tributos = [];
    public $ente_tramites = [];
    public $selectedCategoria = '';
    public $selectedConcepTributos = '';
    public $selectedEnteTramite = '';
    public $ente_tramite = [];
    public $totalUt = 0;
    public $ente_tramite_id;
    public $contribuyente_id;
    public $descripcion = 'ejemplo';

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
        $this->selectedEnteTramite = '0';
        
    }

    public function updatedSelectedEnteTramite()
    {

        $this->ente_tramite = EnteTramite::find($this->selectedEnteTramite);
        $this->totalUt = $this->ente_tramite->total_ut;
        $this->ente_tramite_id = $this->ente_tramite->id;
        
    }

    #[On('tramite-save')]
    public function save($cedula)
    {
        if($cedula)
        {
            $contrib = Contribuyente::where('cedula', $cedula)->first();
            $this->contribuyente_id = $contrib->id;
            $tramite = Tramite::create(
                $this->only('descripcion', 'contribuyente_id', 'ente_tramite_id')
            );
            
        }else{
            $this->dispatch('contrib-save');
        }

        


        
    }

    public function render()
    {

        return view('livewire.AsigTimElec.forms.tramite-form');
    }
}
