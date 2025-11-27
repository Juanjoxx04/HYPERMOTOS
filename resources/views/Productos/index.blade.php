@extends('layouts.app')
@section('titulo', 'Hypermotos/productos')
@section('contenido')

    <div class="grid grid-cols-1 sm:grid-col-2 md:grid-cols-2 lg:grid-cols-3 gap-12 m-10">

        @foreach ($productos as $producto)
            <div class="card bg-white w-85 shadow-sm">

                <figure>
                    <img src="{{ $producto->imagen_url }}"
                        alt="{{ $producto->Nombre ?? 'Producto sin nombre'}}"/>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        <div class="label-name">{{ $producto->Nombre ?? 'Producto desconocido' }}</div>
                    </h2>
                    <p class="text-black ">Vendido por: {{ $producto->Proveedor ?? 'Desconocido'}}</p>

                    <h2 class="card-actions justify-end">
                        <div class="label-price">$ {{ number_format($producto->Precio, 0, ',','.') }}</div>
                    </h2>
                    
                    <div class="card-actions justify-end mt-8">

                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-edit">Editar</a>


                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-error">Eliminar</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
