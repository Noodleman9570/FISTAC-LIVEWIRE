<?php

namespace App\Livewire\TimbresFiscales;

use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class Index extends Component
{

    
    public function render()
    {
        $chart = (new PieChartModel())
        ->setTitle('Ultimos timbres')
        ->addSlice('Timbre 1', 100, '#f6ad55')
        ->addSlice('Timbre 2', 200, '#fc8181')
        ->addSlice('Timbre 3', 300, '#90cdf4');

        return view('livewire.TimbresFiscales.index', compact('chart'));
    }
}
