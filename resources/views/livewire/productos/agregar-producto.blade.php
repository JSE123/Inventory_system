@extends('app')


{{-- @tittle('Agregar productos') --}}

@section('content')
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    
    
   
    <div class="w-full max-w-3xl bg-white shadow-md rounded-lg p-6">

        @if(session('error'))
            <div class="bg-green-500 text-white p-2 rounded-md mb-4 " id="success-message">
                {{ session('error') }}
            </div>
        @endif

        <!-- Encabezado -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-700">Agregar Producto</h2>
            <button wire:click="changeComponent('gestionProductos')" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                ← Volver
                
            </button>
        </div>

        <!-- Formulario de Agregar Producto -->
        <form action="{{route('products.store')}}" method="POST">
            @csrf
            @method('POST')
            <!-- Nombre del Producto -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Nombre del Producto</label>
                <input type="text" 
                    name="name" 
                    value="{{ old('name') }}" 
                    class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-200" 
                    placeholder="Ej. Laptop Dell" 
                    required
                    :class="{ 'border-red-500': errors.name }"
                    @focus="focused = true"
                    @blur="focused = false">

                @error('name')
                    <p class="text-red-500 text-sm mt-1" x-show="!focused">{{ $message }}</p>
                @enderror
            </div>



            {{-- descripcion --}}
            <div class="mb-4">
                <label for="description" class="block font-medium text-gray-700">Descripción</label>
                <textarea name="description" id="description" class="w-full p-2 border rounded-md"></textarea>
            </div>

            <!-- Categoría -->
            <div class="mb-4">
                <label for="category_id" class="block font-medium text-gray-700">Categoría</label>
                <select name="category_id" id="category_id" class="w-full p-2 border rounded-md" required>
                    <option value="">Seleccione una categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            

            <!-- Stock -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Stock</label>
                <input name="stock" type="number" placeholder="0" name="stock" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-200" min="1" required>
            </div>

            <!-- Precio -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Precio ($)</label>
                <input type="number" name="price" step="0.01" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>
            </div>

            <!-- Costo -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Costo ($)</label>
                <input type="number" name="costo" step="0.01" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>
            </div>

            <!-- Botones de Acción -->
            <div class="flex justify-end space-x-3">
                <button type="reset" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancelar</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Guardar Producto</button>
            </div>
        </form>
    </div>
</div>
@endsection