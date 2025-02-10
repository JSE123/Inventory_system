<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $currentComponent = 'home';

    public function changeComponent($component)
    {
        $this->currentComponent = $component;
    }
    public function render()
    {
        return view('livewire.home');
    }
}
