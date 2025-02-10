<?php

namespace App\Livewire\Productos;

use App\Models\Category;
use Livewire\Component;

class AgregarProducto extends Component
{

    public $categories = [];
    public $currentComponent = 'addProduct';

    public function changeComponent($component)
    {
        $this->currentComponent = $component;
    }

    public function getCategories()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.productos.agregar-producto');
    }
}
