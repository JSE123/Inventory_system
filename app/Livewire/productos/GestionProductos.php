<?php

namespace App\Livewire\productos;

use App\Models\Product;
use Livewire\Component;

class GestionProductos extends Component
{

    public $currentComponent = 'products';

    public $products = [];


    //funcion para cambiar el componente actual
    public function changeComponent($component)
    {
        $this->currentComponent = $component;
    }


    // funcion para obtener todos los productos
    public function getProducts()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        $products = Product::all();
        return view('livewire.productos.gestion-productos', compact('products'));
    }
}
