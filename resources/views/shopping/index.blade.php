@extends('layouts.app')
@section('titulo', 'Hypermotos/shopping-cart')
@section('contenido')

<div class="">
    <h1 class="text-2xl font-bold mb-6">Tu carrito</h1>
    @php $total = 0; @endphp
    @foreach ($items as $item)
    @php
    $subtotal = $item->producto->precio * $item->cantidad;
    $total += $subtotal;
    @endphp
    
    <div class="flex justify-between border-b py-3">
        <div>
            <p class="font-semibold">{{$item->producto->nombre}}</p>
            <p class="text-sm text-gray-500">
                Cantidad: {{$item->cantidad}}
            </p>
        </div>
        
        <div>
            ${{number_format($subtotal, 0, ',', '.')}}
        </div>
    </div>
    @endforeach
    
    <div class="mt-6 text-right font-bold text-xl">
        Total: ${{number_format($total, 0, ',','.')}}
    </div>
    
    <button class="btn btn-primary mt-4" onclick="openConfirmModal()">
        Finalizar compra
    </button>
</div>
@endsection