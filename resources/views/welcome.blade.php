@extends("layouts.app")

@section("titulo", "Hypermotos/Welcome")

@section("contenido") 

    <div
      class="hero min-h-screen"
      style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
      <div class="hero-overlay bg-opacity-80"></div>
      <div class="hero-content text-neutral-content text-center">
        <div class="max-w-md">
          <h1 class="mb-5 text-center text-2xl text-white font-bold">¡ BIENVENIDO A HYPERMOTOS !</h1>
          <p class="mb-5 text-gray-200">
            
    Estamos encantados de que nos visites. 
    Aquí encontrarás una amplia variedad de motos, accesorios y repuestos, así como toda la información que necesitas 
    para disfrutar al máximo de tu pasión por las dos ruedas.
          </p>
          <button class="btn bg-red-600 border-red-600 text-white">Comenzar</button>
        </div>
      </div>
    </div>


@endsection



