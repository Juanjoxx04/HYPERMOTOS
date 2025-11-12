@extends('layouts.app')
@section('titulo', 'Hypermotos/productos')
@section('contenido')

    <div class="grid grid-cols-1 sm:grid-col-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">

        @foreach ($productos as $producto)
            <div class="card bg-base-100 w-85 shadow-xl">

                <figure>
                    <img src="https://loremflickr.com/250/250/motorcycle,{{ urlencode($producto->Nombre ?? 'Sin-nombre') }}?lock={{ $producto->id }}"
                        alt="{{ $producto->Nombre ?? 'Producto sin nombre'}} " />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        <div class="label-name">{{ $producto->Nombre ?? 'Producto desconocido' }}</div>
                    </h2>
                    <h2 class="card-title">
                        <div class="badge label-price">$ {{ $producto->Precio ?? 0 }}</div>
                    </h2>
                    <p>Vendido por: {{ $producto->Proveedor ?? 'Desconocido'}}</p>
                    <div class="card-actions justify-end">

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
