@extends("layouts.app")

@section("titulo", "Hypermotos/Welcome")

@section("contenido") 

    <div
      class="hero min-h-screen"
      style="background-image: url(/IMG/Motos.jpeg);">
      <div class="hero-overlay bg-opacity-95"></div>
      <div class="hero-content text-neutral-content text-center">
        <div class="max-w-2xl">

            {{-- LOS INICIOS --}}

          <h1 class="mt-14 mb-10 text-left text-7xl text-white font-bold italic">Los Inicios<h1>

          <p class="mb-7 text-xl font-sans text-gray-100">
            Sebastián, quien había sido un mecánico y piloto de carreras en su juventud, 
            decidió que era hora de llevar su amor por las motos al siguiente nivel. 
            Quería crear una empresa que no solo vendiera motocicletas, sino que también ofreciera experiencias inolvidables. 
            Con esa visión en mente, fundó Hypermotos en un pequeño taller a las afueras de la ciudad. Al principio, se dedicaba 
            a personalizar motos y a construir modelos únicos que atraían la atención de los motociclistas más exigentes.
          </p>
          {{-- EL CRECIMIENTO --}}

          <h1 class="mt-28 mb-10 text-left text-7xl text-white font-bold italic">El Crecimiento<h1>

            <p class="mb-7 text-xl font-sans text-gray-100">
                La fama de Hypermotos creció rápidamente. La calidad de sus motos personalizadas 
                y la pasión de Sebastián por el detalle y la innovación hicieron que la empresa se destacara 
                en un mercado saturado. No pasó mucho tiempo antes de que Hypermotos comenzara a fabricar 
                sus propios modelos de motocicletas, cada uno diseñado para ofrecer una combinación perfecta de potencia, velocidad 
                y estilo.
            </p>

            <p class="mb-7 text-xl font-sans text-gray-100">
                Para Sebastián, no se trataba solo de vender motos; quería crear una comunidad. Organizó eventos y rallies, 
                donde los motociclistas de todas partes podían reunirse y compartir su pasión. Estos eventos se convirtieron 
                en una parte esencial de la cultura de Hypermotos, atrayendo a miles de fanáticos cada año.
            </p>

            {{-- LA INNOVACION --}}

            <h1 class="mt-28 mb-10 text-left text-7xl text-white font-bold italic">La Innovación<h1>

                <p class="mb-7 text-xl font-sans text-gray-100">
                    Con el paso del tiempo, Hypermotos no solo se consolidó como una marca líder en el mercado nacional, 
                    sino que también comenzó a explorar nuevas tecnologías. Sebastián y su equipo de ingenieros comenzaron 
                    a experimentar con motos eléctricas, adelantándose a su tiempo. Crearon la serie "Hyper-E", motos eléctricas 
                    que ofrecían la misma emoción y rendimiento que los modelos tradicionales, pero con un enfoque en la sostenibilidad.
                </p>

                <p class="mb-7 text-xl font-sans text-gray-100">
                    El lanzamiento de la serie "Hyper-E" fue un éxito rotundo. La demanda fue tan alta que Hypermotos tuvo 
                    que ampliar su fábrica y contratar a más personal para satisfacerla. La empresa no solo se hizo conocida 
                    por su innovación en el diseño y la ingeniería, sino también por su compromiso con el medio ambiente.
                </p>

                {{-- LA COMUNIDAD HYPER --}}

                <h1 class="mt-28 mb-10 text-left text-6xl text-white font-bold italic">La Comunidad Hyper<h1>

                    <p class="mb-7 text-xl font-sans text-gray-100">
                        Lo que realmente diferenciaba a Hypermotos de otras marcas era su enfoque en la comunidad. 
                        Sebastián entendía que una moto era mucho más que un medio de transporte; era un estilo de vida. 
                        Por eso, Hypermotos no solo vendía motos, sino también una variedad de accesorios y ropa de alta calidad 
                        que permitían a los motociclistas expresar su identidad.
                    </p>
    
                    <p class="mb-7 text-xl font-sans text-gray-100">
                        Hypermotos también lanzó una aplicación móvil que conectaba a los motociclistas entre sí. 
                        A través de la app, los usuarios podían encontrar rutas recomendadas, unirse a grupos de viaje 
                        y participar en desafíos que les permitían ganar premios y descuentos en la tienda Hypermotos. 
                        La app se convirtió rápidamente en un éxito entre los motociclistas, creando una red global de fanáticos 
                        de Hypermotos.
                    </p>    

                    {{-- EL LEGADO --}}

                <h1 class="mt-28 mb-10 text-left text-7xl text-white font-bold italic">El Legado<h1>

                    <p class="mb-7 text-xl font-sans text-gray-100">
                        A medida que pasaron los años, Hypermotos se expandió a nivel internacional, abriendo tiendas en todo el mundo. 
                        Pero a pesar del crecimiento, Sebastián nunca perdió de vista la misión que lo había impulsado a crear la empresa 
                        en primer lugar: compartir su amor por las motocicletas y crear una comunidad que valorara la libertad y 
                        la aventura que estas ofrecían.
                    </p>
    
                    <p class="mb-7 text-xl font-sans text-gray-100">
                        Sebastián, ahora un hombre mayor, mira hacia atrás con orgullo. Hypermotos se ha convertido en mucho más 
                        que una empresa; es un legado que continuará inspirando a futuras generaciones de motociclistas. 
                        Y mientras haya alguien dispuesto a subirse a una moto y sentir el viento en la cara, Hypermotos seguirá ahí, 
                        liderando el camino hacia nuevas aventuras.
                    </p>    

          <a href="{{ route("login")}}" class="btn bg-red-600 border-red-600 text-white mt-10">Comenzar</a>
        </div>
      </div>
    </div>
@endsection