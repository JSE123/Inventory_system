

<div class="pt-4 mx-4">
    {{-- {{$currentComponent}} --}}
    @if($currentComponent === 'sales')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Ventas</h2>
        <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" wire:click="changeComponent('add-sales')">
                <i class="fas fa-plus"></i>Nueva Venta
        </button>
    </div>

    <!-- Lista de ventas -->
    <div class="bg-white shadow-md rounded p-4">
        <h3 class="text-lg font-semibold mb-4">Historial de Ventas</h3>
        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border p-2">#</th>
                    <th class="border p-2">Cliente</th>
                    <th class="border p-2">Fecha</th>
                    <th class="border p-2">Total</th>
                    <th class="border p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($sales as $sale)
                        <td class="border p-2">1</td>
                        <td class="border p-2">{{$sale->client->name}}</td>
                        <td class="border p-2"></td>
                        <td class="border p-2">${{ number_format($sale->total, 2) }}</td>
                        <td class="border p-2 text-center">
                            <button class="bg-blue-500 text-white px-2 py-1 rounded">Ver</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded">Eliminar</button>
                        </td>
                        @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    @elseif($currentComponent == 'add-sales')
        @livewire('ventas.AddSale')
    @endif 
</div>
