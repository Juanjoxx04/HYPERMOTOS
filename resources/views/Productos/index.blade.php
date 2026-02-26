@extends('layouts.app')
@section('titulo', 'Hypermotos/productos')
@section('contenido')

    <div class="grid grid-cols-1 sm:grid-col-2 md:grid-cols-2 lg:grid-cols-3 gap-12 m-10">
        @foreach ($productos as $producto)
            <div class="card bg-white w-85 shadow-sm">
                
                <figure>
                    <img src="{{ $producto->imagen_url }}"
                        alt="{{ $producto->imagen_url ?? 'Producto sin imagen'}}"/>
                </figure>
                
                <div class="card-body">
                    <h2 class="card-title">
                        <div class="label-name">{{ $producto->nombre ?? 'Producto desconocido' }}</div>
                    </h2>
                    <p class="text-black ">Vendido por: {{ $producto->proveedor ?? 'Desconocido'}}</p>

                    <h2 class="card-actions justify-end">
                        <div class="label-price">$ {{ number_format($producto->precio, 0, ',','.') }}</div>
                    </h2>

                    <div class="card-actions justify-end mt-4">
                    @auth
                    <button type="button" class="btn btn-primary btn-buy-color btn-add-cart" 
                    data-producto-id="{{$producto->id}}" data-store-url="{{route('shopping.store')}}">
                        @else
                        <a href="{{route('register')}}" class="btn btn-primary btn-buy-color">
                    @endauth
                            Añadir al carrito
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                <path d="M240-80q-33 0-56.5-23.5T160-160v-480q0-33 23.5-56.5T240-720h80q0-66 47-113t113-47q66 0 113 47t47 113h80q33 0 56.5 23.5T800-640v480q0 33-23.5 56.5T720-80H240Zm0-80h480v-480h-80v80q0 17-11.5 28.5T600-520q-17 0-28.5-11.5T560-560v-80H400v80q0 17-11.5 28.5T360-520q-17 0-28.5-11.5T320-560v-80h-80v480Zm160-560h160q0-33-23.5-56.5T480-800q-33 0-56.5 23.5T400-720ZM240-160v-480 480Z"/>
                            </svg>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
