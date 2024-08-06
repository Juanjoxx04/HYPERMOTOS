@extends("layouts.app")
@section("titulo", "Hypermotos/crear productos")
@section("Cabecera", "Crear Producto")

@section("contenido") 

    <div class="flex justify-center my-6">
        <div class="card w-96 shadow-2x1 bg-base-100">
            <div class="card-body">

                <form action="{{ route("productos.store")}}" method="POST">
                    @csrf

                    {{-- NOMBRE --}}

                    <div class="form-control">
                        <label for="Nombre" class="label">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" class="input input-bordered" placeholder="Nombre del producto" required/>
                    </div>

                    {{-- PRECIO --}}

                    <div class="form-control">
                        <label for="Precio" class="label">Precio</label>
                        <input type="number" name="Precio" id="Precio" class="input input-bordered" placeholder="Precio del producto" required/>
                    </div>

                    {{-- STOCK --}}

                    <div class="form-control">
                        <label for="Stock" class="label">Stock</label>
                        <input type="number" name="Stock" id="Stock" class="input input-bordered" placeholder="Escriba el Stock" required/>
                    </div>

                    {{-- PROVEEDOR --}}

                    <div class="form-control">
                        <label for="Proveedor" class="label">Proveedor</label>
                        <input type="text" name="Proveedor" id="Proveedor" class="input input-bordered" placeholder="Nombre del Proveedor" required/>
                    </div>

                    {{-- boton Crear producto --}}

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary ">Crear Producto</button>
                        <a href="{{ route ("productos.index") }}" class="btn btn-outline btn-primary mt-4"  >Cancelar</a>
                    
                    </div>

                    

                </form>

            </div>
            
        </div>

    </div>