<?php

namespace App\Livewire;

use App\Livewire\Actions\Logout;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class TopNavbar extends Component
{
    #[Modelable]
    public $page;

    public function render()
    {
        return view('livewire.top-navbar');
    }

     /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
      
        $logout();

        $this->redirect('/', navigate: true);
    }
}
