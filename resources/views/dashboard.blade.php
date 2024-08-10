@extends("layouts.app")

@section("titulo", "Hypermotos/Dashboard")

@section("contenido") 

<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-4xl font-bold">Hola, {{auth()->user()->name}} !</h1>
        <p class="py-6">
          Bienvienido a la web Hypermotos, donde tus sueños se haran realidad en  dos ruedas.
        </p>
        <a href="{{ route ("productos.index") }}" class="btn bg-red-600 border-red-600 font-semibold text-white">Ver productos</a>
      </div>
    </div>
  </div>

@endsection    
