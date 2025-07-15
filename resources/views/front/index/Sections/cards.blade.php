<section class="mt-1">

 <div class="text-center">
        <h1 class="font-bold text-3xl text-greenblack" data-aos="fade-down">CONSULTA NUESTROS PRECIOS</h1>
        <div class="w-70 h-1 bg-salmon flex m-auto mt-3 mb-3"></div>
  </div>

     <article class="md:grid md:grid-cols-3 2xl:gap-0 gap-6 p-2 space-y-4">
      <div class="relative w-full max-w-sm mx-auto rounded-2xl overflow-hidden shadow-aqua h-[500px]"
      data-aos="fade-right" data-aos-durat="2000">
        <!-- Imagen de fondo -->
        <img src="{{ asset('assets/img/buy-card/tar-provi.webp') }}" alt="Hotel FCH Providencia" class="absolute inset-0 w-full h-full object-cover contrast-100">

        <!-- Capa oscura -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Contenido centrado hacia la mitad inferior -->
        <div class="relative z-10 h-full flex flex-col justify-end p-5 text-white">
            <!-- Etiqueta HOTEL -->
            <span class="bg-aqua text-xs font-bold px-3 py-1 rounded-full inline-block mb-2 w-fit">HOTEL</span>

            <!-- Ubicación -->
            <div class="flex items-center gap-2 text-sm mb-3">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6c0 4 6 10 6 10s6-6 6-10a6 6 0 00-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z" clip-rule="evenodd" />
                </svg>
                Guadalajara - México
            </div>

            <span class="bg-white w-full h-[1px] mb-2"></span>

            <!-- Título -->
            <h2 class="text-xl font-bold mb-4">Hotel FCH Providencia</h2>

            <!-- Etiquetas + Precio en dos columnas -->
            <div class="flex justify-between items-start mb-4">
                <!-- Etiquetas 2x2 -->
                <div class="grid grid-cols-2 gap-2">
                    @foreach (['GIMNASIO', 'RESTAURANT', 'ALBERCA', 'ARTE'] as $tag)
                        <span class="border border-white px-2 py-1 text-xs rounded text-center w-fit font-bold">{{ $tag }}</span>
                    @endforeach
                </div>

                <!-- Precio -->
                <div class="text-right">
                    <span class="text-sm font-medium">desde</span>
                    <div class="text-3xl font-bold leading-tight overflow-hidden">2.090 <span class="text-base">MXN</span></div>
                    <div class="text-xs">hab./noche</div>
                </div>
            </div>

            
            <span class="bg-white w-full h-[1px] mb-4"></span>


            <!-- Fechas -->
            <div class="flex items-center gap-2 text-sm mb-4">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m-9 4h9m-9 4h5m6 0V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2z"/>
                </svg>
                Del <span class="font-medium">01/07/25</span> al <span class="font-medium">31/07/25</span>
            </div>

            <!-- Botón -->
          <div class="w-full flex justify-end">
            <a href="https://hotels.cloudbeds.com/reservation/K6bLIF" target="_blank" class="inline-block bg-salmon hover:bg-pink-600 text-white text-sm font-semibold px-4 py-2 rounded shadow w-fit">
                Ver precios
            </a>
          </div>

        </div>
    </div>

          <div class="relative w-full max-w-sm mx-auto rounded-2xl overflow-hidden shadow-salmon shadow-md h-[500px]"
          data-aos="zoom-in" data-aos-durat="2000">
        <!-- Imagen de fondo -->
        <img src="{{ asset('assets/img/buy-card/tar-expo.jpg') }}" alt="Hotel FCH Expo" class="absolute inset-0 w-full h-full object-cover contrast-100">

        <!-- Capa oscura -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Contenido centrado hacia la mitad inferior -->
        <div class="relative z-10 h-full flex flex-col justify-end p-5 text-white">
            <!-- Etiqueta HOTEL -->
            <span class="bg-aqua text-xs font-bold px-3 py-1 rounded-full inline-block mb-2 w-fit">HOTEL</span>

            <!-- Ubicación -->
            <div class="flex items-center gap-2 text-sm mb-3">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6c0 4 6 10 6 10s6-6 6-10a6 6 0 00-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z" clip-rule="evenodd" />
                </svg>
                Guadalajara - México
            </div>

            <span class="bg-white w-full h-[1px] mb-2"></span>

            <!-- Título -->
            <h2 class="text-xl font-bold mb-4">Hotel FCH Expo</h2>

            <!-- Etiquetas + Precio en dos columnas -->
            <div class="flex justify-between items-start mb-4">
                <!-- Etiquetas 2x2 -->
                <div class="grid grid-cols-2 gap-2">
                    @foreach (['GIMNASIO', 'RESTAURANT', 'ALBERCA', 'ARTE'] as $tag)
                        <span class="border border-white px-2 py-1 text-xs rounded text-center w-fit font-bold">{{ $tag }}</span>
                    @endforeach
                </div>

                <!-- Precio -->
                <div class="text-right">
                    <span class="text-sm font-medium">desde</span>
                    <div class="text-3xl font-bold leading-tight overflow-hidden">2.090 <span class="text-base">MXN</span></div>
                    <div class="text-xs">hab./noche</div>
                </div>
            </div>

            <span class="bg-white w-full h-[1px] mb-4"></span>


            <!-- Fechas -->
            <div class="flex items-center gap-2 text-sm mb-4">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m-9 4h9m-9 4h5m6 0V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2z"/>
                </svg>
                Del <span class="font-medium">01/07/25</span> al <span class="font-medium">31/07/25</span>
            </div>


            <!-- Botón -->
          <div class="w-full flex justify-end">
            <a href="https://hotels.cloudbeds.com/reservation/K6bLIF" target="_blank" class="flex justify-end bg-salmon hover:bg-pink-600 text-white text-sm font-semibold px-4 py-2 rounded shadow w-fit">
                Ver precios
            </a>
          </div>
        </div>
    </div>

          <div class="relative w-full max-w-sm mx-auto rounded-2xl overflow-hidden shadow-aqua shadow-md h-[500px]"
          data-aos="fade-left" data-aos-durat="2000">
        <!-- Imagen de fondo -->
        <img src="{{ asset('assets/img/buy-card/tar-minerva.webp') }}" alt="Hotel FCH Minerva" class="absolute inset-0 w-full h-full object-cover contrast-100">

        <!-- Capa oscura -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Contenido centrado hacia la mitad inferior -->
        <div class="relative z-10 h-full flex flex-col justify-end p-5 text-white">
            <!-- Etiqueta HOTEL -->
            <span class="bg-aqua text-xs font-bold px-3 py-1 rounded-full flex justify-end mb-2 w-fit">HOTEL</span>

            <!-- Ubicación -->
            <div class="flex items-center gap-2 text-sm mb-3">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6c0 4 6 10 6 10s6-6 6-10a6 6 0 00-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z" clip-rule="evenodd" />
                </svg>
                Guadalajara - México
            </div>

            <span class="bg-white w-full h-[1px] mb-2"></span>

            <!-- Título -->
            <h2 class="text-xl font-bold mb-4">Hotel FCH Minerva</h2>

            <!-- Etiquetas + Precio en dos columnas -->
            <div class="flex justify-between items-start mb-4">
                <!-- Etiquetas 2x2 -->
                <div class="grid grid-cols-2 gap-2">
                    @foreach (['GIMNASIO', 'RESTAURANT', 'ALBERCA', 'ARTE'] as $tag)
                        <span class="border border-white px-2 py-1 text-xs rounded text-center w-fit font-bold">{{ $tag }}</span>
                    @endforeach
                </div>

                <!-- Precio -->
                <div class="text-right">
                    <span class="text-sm font-medium">desde</span>
                    <div class="text-3xl font-bold leading-tight overflow-hidden">2.090 <span class="text-base">MXN</span></div>
                    <div class="text-xs">hab./noche</div>
                </div>
            </div>

             <span class="bg-white w-full h-[1px] mb-2 hidden sm:block"></span>


            <!-- Fechas -->
            <div class="flex items-center gap-2 text-sm mb-4">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m-9 4h9m-9 4h5m6 0V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2z"/>
                </svg>
                Del <span class="font-medium">01/07/25</span> al <span class="font-medium">31/07/25</span>
            </div>

            <!-- Botón -->
          <div class="w-full flex justify-end">
            <a href="#" target="_blank" class=" flex justify-end bg-salmon hover:bg-pink-600 text-white text-sm font-semibold px-4 py-2 rounded shadow w-fit">
                Ver precios
            </a>
          </div>
          
        </div>
    </div>
</article>

</section>