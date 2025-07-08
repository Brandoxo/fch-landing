<nav class=" to-salmon/50 from-hielow/80 bg-linear-to-l top-0 left-0 w-full fixed z-50 pointer-events-none transition-opacity duration-300 hidden" id="scrollHeader" data-aos="fade-dow"
data-aos-duration="1000"
data-aos-once="false">

    <div class="flex justify-between items-center px-8 md:px-20 lg:px-40 2xl:px-60 py-2 md:py-1 mx-auto z-20">
            <a class="" href="{{ route('home') }}">
              <img class="h-16 hidden md:block" src="{{asset('assets/img/logos/logo.png')}}" alt="Logo Hotel FCH Hotel Navbar">
            </a>
            <ul class="text-white ml-auto md:flex gap-4 hidden font-semibold 2xl:text-lg">
                <li><a href="#"><p>Hoteles</p></li>
                <li><a href="#"><p>Arte y Diseño</p></li>
                <li><a href="#"><p>Gourmet</p></li>
                <li><a href="#"><p>Contacto</p></li>
                <li><a href="#"><p>EN</p></li>
            </ul>

            <div class="md:hidden block" data-open-nav id="openNavBtnMovile">
            <img class="w-10" src="{{ asset('assets/icons/menu.svg') }}" alt="menu">
        </div>
        <div class="md:hidden bg-salmon rounded-xl ml-auto">
            <a target="_blank" href="https://wa.me/3333113958?text=Hola%20me%20gustaría%20saber%20más%20sobre%20el%20hotel" class="bg-salmon h-12 w-12 p-1 rounded-xl block">
                <img class="w-10" src="{{ asset('assets/icons/socials/WhatsApp Inc.svg') }}" alt="menu">
            </a>
        </div>
        </div>
    </div>
</nav>