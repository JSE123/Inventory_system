<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
        $sales = Sale::with('sale_details');
        return view('livewire.ventas.sales', compact('sales'));
    }

    public function agregarVenta(){
        $carrito = [];
        $customers = Client::all();
        $products = Product::all();
        return view('livewire.ventas.add-sales', compact('clients', 'products', 'carrito'));
    }
}
