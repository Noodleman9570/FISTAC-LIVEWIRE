<?php

namespace App\Livewire\TimbresFiscales;

use Livewire\Component;
use App\Models\TimbreFiscal;

class CantidadTimbresChart extends Component
{

    public function mount(){
        
    }

    public function render()
    {
        return view('livewire.TimbresFiscales.cantidad-timbres-chart');
    }
}
