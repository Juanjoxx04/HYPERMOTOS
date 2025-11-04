@extends("layouts.app")

@section("titulo", "Hypermotos/Welcome")

@section("contenido") 

    <div
      class="hero min-h-screen"
      style="background-image: url(/IMG/Motos.jpeg);">
      <div class="hero-overlay bg-opacity-85"></div>
      <div class="hero-content text-neutral-content text-center">
        <div class="max-w-xl">
          <h1 class="mb-10 text-center text-2xl text-white font-bold">¡BIENVENIDO A HYPERMOTOS!</h1>

          <p class="mb-7 text-lg font-semibold text-gray-100">
             Estamos encantados de que nos visites.
            Aquí encontrarás una amplia variedad de motos, accesorios y repuestos, así como toda la información que necesitas 
            para disfrutar al máximo de tu pasión por las dos ruedas.
          </p>

          
          <a href="{{ route('register') }}" class="btn btn-outline border-red-600 bg-red-600 text-white">Comenzar</a>


@endsection          
        
        </div>
      </div>
    </div>