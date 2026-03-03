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
    
    <div class="flex items-center border-b py-3 m-12 gap-4">
        <div class="flex-1 min-w-0">
            <p class="font-semibold break-words text-gray-100">{{$item->producto->nombre}}</p>
            <p class="text-sm text-gray-400">
                Cantidad: {{$item->cantidad}}
            </p>
        </div>

        <div class="flex-1 flex justify-center">
            <p class="font-semibold text-center text-gray-100">{{$item->producto->proveedor}}</p>
        </div>
        
        <div class="flex-1 text-right text-gray-100">
            ${{number_format($subtotal, 0, ',', '.')}}
        </div>
    </div>
    @endforeach
    
    <div class="mt-6 text-right font-bold text-xl m-12 text-white italic">
        Total: ${{number_format($total, 0, ',','.')}}
    </div>
    <div class="flex justify-center items-center">
        <button class="btn btn-primary mt-2 mb-10 text-white bg-red-600 border-red-600 btn-purshace-buy" onclick="my_modal_1.showModal()">
            Finalizar compra
        </button>
        
        <dialog id="my_modal_1" class="modal">
            <div class="modal-box bg-white">
                <div>
                    <h3 class="text-center text-3xl font-bold italic text-red-600">Revisa tu orden...</h3>
                    
                    @foreach ($items as $item)
                    <div class="flex justify-between border-b py-2 mt-10">
                        <div>
                            <p class="font-semibold text-gray-800">{{$item->producto->nombre}}</p>
                            <p class="text-sm text-gray-800">Cantidad:{{$item->cantidad}}</p>
                        </div>
                        <div>
                            <p class="text-gray-800">${{number_format($item->producto->precio * $item->cantidad, 0,',','.')}}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="mt-7 text-right font-bold text-black text-lg">
                        Total: ${{number_format($total, 0, ',','.')}}
                    </div>

                    <div class="modal-action mt-10">
                        <button class="modal-action">
                            <form method="dialog">
                                <button class="btn border-red-600 bg-red-600 text-white hover:bg-green-500 hover:text-black hover:border-green-500" onclick="my_modal_3.showModal()">Confirmar compra</button>
                            </form>
                        </button>
                        <form method="dialog">
                            <button class="btn border-b-black text-white hover:bg-gray-400 hover:text-black hover:border-gray-400">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </dialog>

        <dialog id="my_modal_3" class="modal">
            <div class="modal-box bg-white">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 text-black text-xl">x</button>
                </form>
                <h3 class="text-xl font-bold italic text-red-600 text-center">¡COMPRA EXITOSA!</h3>
                <p class="mt-5 text-black font-sans text-center">Hemos recibido tu orden y nuestro equipo ya está manos a la obra. ¡Pronto tendrás tus productos contigo!</p>
            </div>
        </dialog>
    </div>
@endsection