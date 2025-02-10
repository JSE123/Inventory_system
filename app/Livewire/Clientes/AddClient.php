<?php

namespace App\Livewire\Clientes;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddClient extends Component
{
    // funcion que guarda un nuevo cliente
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'nullable',
            'address' => 'nullable'
        ]);

        DB::beginTransaction();
        try {
            Client::create($request->all());
            DB::commit();
            return redirect()->back();
            // return redirect()->route('customers.index')->with('success', 'Cliente agregado correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Error al agregar el cliente.');
        }
    }

    public function render()
    {
        return view('livewire.clientes.add-client');
    }
}
