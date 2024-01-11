<?php

namespace App\Livewire;

use Livewire\Component;

class ThemeSwitcher extends Component
{

    public $theme = 'light';

    public function switchTheme(){
        $this->theme = $this->theme === 'light' ? 'dark' : 'light';
      }

    public function render()
    {
        return view('livewire.theme-switcher');
    }
}
