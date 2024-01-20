<?php

namespace App\Livewire;

use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class PieChart extends Component
{


    public function render()
    {
        $chart = (new PieChartModel())
            ->setTitle('Ultimos timbres')
            ->addSlice('Timbre 1', 100, '#fff')
            ->addSlice('Timbre 2', 200, 'blue')
            ->addSlice('Timbre 3', 300, 'red')
        ;
        return view('livewire.pie-chart', compact('chart'));
    }
}
