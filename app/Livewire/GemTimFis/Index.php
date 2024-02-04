<?php

namespace App\Livewire\GemTimFis;

use Livewire\Component;

class Index extends Component
{
    public $step1 = false;
    public $step2 = false;
    public $step3 = false;
    public $timbre_1 = false;
    public $timbre_5 = false;
    public $timbre_10 = false;
    public $timbre_20 = false;
    public $timbre_50 = false;

    public function selectedTimbre($timbre)
    {
        switch ($timbre) {
            case 1:
                $this->timbre_1 = true;
                $this->timbre_5 = false;
                $this->timbre_10 = false;
                $this->timbre_20 = false;
                $this->timbre_50 = false;
                break;
            case 5:
                $this->timbre_1 = false;
                $this->timbre_5 = true;
                $this->timbre_10 = false;
                $this->timbre_20 = false;
                $this->timbre_50 = false;
                break;
            case 10:
                $this->timbre_1 = false;
                $this->timbre_5 = false;
                $this->timbre_10 = true;
                $this->timbre_20 = false;
                $this->timbre_50 = false;
                break;
            case 20:
                $this->timbre_1 = false;
                $this->timbre_5 = false;
                $this->timbre_10 = false;
                $this->timbre_20 = true;
                $this->timbre_50 = false;
                break;
            case 50:
                $this->timbre_1 = false;
                $this->timbre_5 = false;
                $this->timbre_10 = false;
                $this->timbre_20 = false;
                $this->timbre_50 = true;
                break;


            default:
                # code...
                break;
        }
    }

    public function checkStep1()
    {
        $this->step1 = true;
    }

    public function checkStep2()
    {
        $this->step2 = true;
    }

    public function checkStep3()
    {
        $this->step3 = true;
    }

    public function back()
    {
        $this->step1 = false;
        $this->step2 = false;
        $this->step3 = false;
    }

    public function render()
    {
        return view('livewire.GenTimFis.index');
    }
}
