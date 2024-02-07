<?php

namespace App\Livewire\TimbresFiscales;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class LastTimbresTable extends Component
{
    public $timbres = [];

    public function mount()
    {
        $this->timbres = DB::table('timbres_fiscales')
        ->join('denom_timbres', 'denom_timbres.id', 'timbres_fiscales.denominacion_id')
        ->join('tramites', 'tramites.id', 'timbres_fiscales.tramite_id')
        ->join('contribuyentes', 'contribuyentes.id', 'tramites.contribuyente_id')
        ->join('ente_tramites', 'ente_tramites.id', 'tramites.ente_tramite_id')
        ->select('timbres_fiscales.*', 'denom_timbres.tipo', 'contribuyentes.cedula', 'contribuyentes.nombre', 'contribuyentes.apellido', 'ente_tramites.nombre as ente_nombre')
        ->where('status', 'asignado')
        ->latest()
        ->take(3)
        ->get();
    }

    public function render()
    {
        return view('livewire.TimbresFiscales.last-timbres-table');
    }
}
