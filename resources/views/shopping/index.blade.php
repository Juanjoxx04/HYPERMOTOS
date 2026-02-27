@extends('layouts.app')
@section('titulo', 'Hypermotos/shopping-cart')
@section('contenido')

    <h1 class="text-4xl font-semibold my-5 ml-7 text-white italic">Tu carrito</h1>
    @php $total = 0; @endphp
    @foreach ($items as $item)
    @php
    $subtotal = $item->producto->precio * $item->cantidad;
    $total += $subtotal;
    @endphp
    
    <div class="flex justify-between border-b py-3 m-12">
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
    
    <div class="mt-6 text-right font-bold text-xl m-12 text-white italic">
        Total: ${{number_format($total, 0, ',','.')}}
    </div>
    <div class="flex justify-center items-center">
    <button class="btn btn-primary mt-10 mb-5 text-white bg-red-600 border-red-600 btn-purshace-buy" onclick="openConfirmModal()">
        Finalizar compra
    </button>
    </div>
@endsection