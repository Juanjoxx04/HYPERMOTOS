<div class="navbar bg-white shadow-lg fixed top-0 z-50">

    {{-- logo --}}

    <div class="mx-4">

        <a href="{{ Route('home') }}"><img src="IMG/moto.jpg" fill='none' class="size-16"></a>

    </div>

    {{-- menu móvil --}}

    <div class="flex-1 md:hidden">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="" class="h-5 w-5" fill="none" viewBox="0
            0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow
            bg-base-100 rounded-box w-52">

                <li><a href="{{ route('home') }}">Bienvenidos</a></li>
                <li><a href="{{ route('home') }}">Servicios</a></li>
                <li><a href="{{ route('productos.index') }}">Productos</a></li>
                <li><a href="{{ route('conocenos') }}">Acerca de nosotros</a></li>
            </ul>
        </div>
    </div>

    {{-- menu desktop --}}

    <div class="flex-1 hidden md:flex space-x-4 text-red-600">

        <a href="{{ route('home') }}" class="btn btn-ghost btn-md">Bienvenidos</a>
        <a href="{{ route('home') }}" class="btn btn-ghost btn-md">Servicios</a>
        <a href="{{ route('productos.index') }}" class="btn btn-ghost btn-md">Productos</a>
        <a href="{{ route('conocenos') }}" class="btn btn-ghost btn-md">Acerca de nosotros</a>

    </div>

    {{-- Si esta autenticado muestra menu de usuario, sino muestra botones de login y
  registro --}}

    @auth
    @php
        $cartCount = \App\Models\ShoppingCart::where('user_id', auth()->id())->sum('cantidad');
    @endphp

    <a href="{{route('shopping.index')}}" class="btn btn-ghost btn-circle btn-cart mr-4 relative">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#df0000">
            <path d="M223.5-103.5Q200-127 200-160t23.5-56.5Q247-240 280-240t56.5 23.5Q360-193 360-160t-23.5 56.5Q313-80 280-80t-56.5-23.5Zm400 0Q600-127 600-160t23.5-56.5Q647-240 680-240t56.5 23.5Q760-193 760-160t-23.5 56.5Q713-80 680-80t-56.5-23.5ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/>
        </svg>
        @if($cartCount > 0)
        <span class="absolute top-1 right-1 bg-red-600 text-white text-xs rounded-full px-2 font-bold w-5 h-5 flex items-center justify-center">
            {{$cartCount}}
        </span>
        @endif
    </a>

        <h3 class="mr-4 font-semibold text-gray-800">Hola, {{ auth()->user()->name }}</h3>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar mr-4">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS Navbar component" src="https://loremflickr.com/100/100/face" />
                </div>
            </div>

            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">

                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('profile.edit') }}">Mi perfil</a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
      this.closest('form').submit();">Cerrar sesión</a>

                    </form>
                </li>
            </ul>
        </div>
    @else
        <div class="mx-4 space-x-4">
            <a href="{{ route('login') }}" class="btn btn-outline border-red-600 bg-red-600 text-white btn-sm">Ingresar</a>
            <a href="{{ route('register') }}"
                class="btn btn-outline border-red-600 bg-red-600 text-white   btn-sm">Registrarse</a>
        </div>
    @endauth

</div>
