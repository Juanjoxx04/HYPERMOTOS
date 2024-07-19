@extends("layouts.app")

@section("titulo", "Hypermotos/productos")

@section("contenido") 

    <div class="grid grid-cols-1 sm:grid-col-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">

        @foreach ($Productos as $Producto)
          

              <div class="card bg-base-100 w-85 shadow-xl">
                <figure>
                  <img
                    src="{{ asset ("IMG/" .$Producto["imagen"]) }}">
                </figure>
                <div class="card-body">
                  <h2 class="card-title">
                    {{ $Producto["Nombre"] }}
                    <div class="badge badge-secondary">NEW</div>
                  </h2>
                  <p>If a dog chews shoes whose shoes does he choose?</p>
                  <div class="card-actions justify-end">
                    <div class="badge badge-outline">${{ $Producto["Precio"] }}</div>
                    <div class="badge badge-outline">Products</div>
                  </div>
                </div>
              </div>

        @endforeach
        
    </div>

@endsection



