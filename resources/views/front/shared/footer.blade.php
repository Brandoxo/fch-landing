<footer>

    <div class=" bg-greenblack  relative py-16 px-4 flex md:flex-row md:px-6  flex-col items-center md:justify-center gap-30">

        <div>
            <img class="w-40" src="{{ asset('assets/img/logos/logo-ver.png') }}" alt="Logo Country Hotel">
        </div>

        <div class="">
            <p class="text-white text-2xl font-bold mb-4">Redes Sociales</p>
            <ul class="grid grid-cols-3 gap-2">
                <li class="w-8 mx-auto"><a target="_blank" href="#"><img src="{{ asset('assets/icons/socials/WhatsApp Inc.svg') }}" alt="WhatsApp"></a></li>
                <li class="w-8 mx-auto"><a target="_blank" href="#"><img src="{{ asset('assets/icons/socials/Facebook.svg') }}" alt="Facebook"></a></li>
                <li class="w-8 mx-auto"><a target="_blank" href="#"><img src="{{ asset('assets/icons/socials/Tiktok.svg') }}" alt="Tiktok"></a></li>
            </ul>
        </div>

       

    </div>

    <div class="bg-greenblack p-2 ">

        <ul class="text-white font-bold flex flex-wrap gap-4 justify-center 2xl:gap-20 text-md">
            <li class="hover:text-black"><a href="{{route('home')}}">Inicio</a></li>
            <li class="hover:text-black"><a href="#">Instalaciones</a></li>
            <li class="hover:text-black"><a href="#">Habitaciones</a></li>
            <li class="hover:text-black"><a href="#">Servicios</a></li>
            <li class="hover:text-black"><a href="#">Contacto</a></li>
        </ul>

    </div>

    <div class="bg-greenblack p-1 text-center">
        <p class="text-white/75 text-sm">
            &copy; 
            <script>document.write(new Date().getFullYear())</script>
            <noscript>2023</noscript>
            Hotel FCH Expo. Todos los derechos reservados.
            Powered by <a href="https://pcbtroniks.com" target="_blank" class="font-bold">Pcbtroniks</a>.
        </p>
    </div>

</footer>