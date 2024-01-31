<?php

namespace App\Livewire\AsigTimElec\Forms;

use App\Models\Categoria;
use App\Models\ConceptoTributo;
use App\Models\Contribuyente;
use App\Models\EnteTramite;
use App\Models\TimbreFiscal;
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

    public function rules()
    {
        return [

            'ente_tramite_id' => 'min:1',


        ];
    }

    public function messages()
    {
        return [
            'ente_tramite_id.min' => 'Debe seleccionar un ente de tramite'
        ];
    }

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

    function generarCodigo($longitud) {
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $longitud_caracteres = strlen($caracteres);
        $codigo = '';
      
        for ($i = 0; $i < $longitud; $i++) {
          $index = rand(0, $longitud_caracteres - 1);
          $codigo .= $caracteres[$index];
        }
      
        return $codigo;
    }   

    #[On('tramite-save')]
    public function save($cedula, $exists)
    {
        if($exists)
        {
            
            $this->validate();

            
            $contrib = Contribuyente::where('cedula', $cedula)->first();
            $this->contribuyente_id = $contrib->id;
            $tramite = Tramite::create(
                $this->only('descripcion', 'contribuyente_id', 'ente_tramite_id')
            );

            TimbreFiscal::create(
                id
                'id_ut' =>
            );

            $this->redirect(route('AsigTimElec.index')); 
            
        }else{
            $this->dispatch('contrib-save');
        }

    }

    public function render()
    {

        return view('livewire.AsigTimElec.forms.tramite-form');
    }
}
