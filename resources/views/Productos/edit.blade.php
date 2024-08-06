@extends("layouts.app")
@section("titulo", "Hypermotos/Editar productos")
@section("Cabecera", "Editar Producto")

@section("contenido") 

    <div class="flex justify-center my-6">
        <div class="card w-96 shadow-2x1 bg-base-100">
            <div class="card-body">

                <form action="{{ route("productos.update", $producto->id)}}" method="POST">
                    @csrf
                    @method("PUT")

                    {{-- NOMBRE --}}

                    <div class="form-control">
                        <label for="Nombre" class="label">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" class="input input-bordered" placeholder="Nombre del producto" value="{{$producto->Nombre}}" required/>
                    </div>

                    {{-- PRECIO --}}

                    <div class="form-control">
                        <label for="Precio" class="label">Precio</label>
                        <input type="number" name="Precio" id="Precio" class="input input-bordered" placeholder="Precio del producto" value="{{$producto->Precio}}" required/>
                    </div>

                    {{-- STOCK --}}

                    <div class="form-control">
                        <label for="Stock" class="label">Stock</label>
                        <input type="number" name="Stock" id="Stock" class="input input-bordered" placeholder="Escriba el Stock" value="{{$producto->Stock}}" required/>
                    </div>

                    {{-- PROVEEDOR --}}

                    <div class="form-control">
                        <label for="Proveedor" class="label">Proveedor</label>
                        <input type="text" name="Proveedor" id="Proveedor" class="input input-bordered" placeholder="Nombre del Proveedor" value="{{$producto->Proveedor}}" required/>
                    </div>

                    {{-- boton Crear producto --}}

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary ">Actualizar Producto</button>
                        <a href="{{ route ("productos.index") }}" class="btn btn-outline btn-primary mt-4"  >Cancelar</a>
                    
                    </div>

                    

                </form>

            </div>
            
        </div>

    </div>