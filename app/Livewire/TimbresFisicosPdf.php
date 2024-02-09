<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class TimbresFisicosPdf extends Component
{
    #[Modelable]
    public $selectTimbre;

    public function render()
    {
        return view('livewire.timbres-fisicos-pdf');
    }
}
