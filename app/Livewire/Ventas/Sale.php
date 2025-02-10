<?php

namespace App\Livewire\Ventas;

use App\Models\Sale as ModelsSale;
use Livewire\Component;

class Sale extends Component
{

    public $currentComponent = 'sales';


    //funcion para cambiar el componente actual
    public function changeComponent($component)
    {
        $this->currentComponent = $component;
    }

    public function render()
    {
        $sales = ModelsSale::with('sale_details');
        return view('livewire.ventas.sales', ['sales' => $sales]);
    }
}
