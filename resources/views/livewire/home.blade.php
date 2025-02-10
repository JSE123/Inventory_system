@extends('app')


@section('content')
<div class="flex">

    {{-- componnete principal --}}
    <div class="flex-grow">
        {{-- @if($currentComponent === 'home')
            <div>
                <h1>Hola bienvenido</h1>
            </div>
        @elseif($currentComponent == 'sales')
            <livewire:ventas.sale />
        @elseif($currentComponent == 'sales')
            <livewire:ventas.sale />
        @elseif($currentComponent == 'products')
            <livewire:productos.GestionProductos />
        @endif   --}}
    </div>
    
    bienvenido
</div>

@endsection