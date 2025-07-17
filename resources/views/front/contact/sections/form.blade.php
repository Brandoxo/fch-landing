<section class="bg-red grid grid-cols-1 md:grid-cols-2 h-full">
    
    <div class="bg-black/30 left-0 top-0 z-20 w-full h-[1500px] 2xl:h-[1300px] absolute"></div>
    <div class="bg-salmon absolute end-0  start-0 w-1/2 h-[600px] z-10 border-0.5"></div>
    <div class="bg-hielow absolute end-0 w-1/2 2xl:h-[900px] lg:h-[1000px] h-[1200px] top-96 z-10 border-0.5"></div>
    
    <div class="bg-blue absolute top-96 start-0 w-1/2 lg:h-[1000px] h-[1200px] 2xl:h-[900px] z-10 border-0.5"></div>
    <div class="bg-aqua absolute end-0 w-1/2 h-[600px]  z-10 border-0.5"></div>


    <div class="p-4 py-20 z-20">
        <div class="flex flex-wrap gap-4 p-4 text-white">
            <h1 class="text-4xl md:text-5xl font-bold text-center text-shadow mx-auto">CONTÁCTANOS</h1>
            <p class="w-3/4 mx-auto text-center font-semibold">
            ¿Tienes dudas, comentarios o sugerencias? Estamos aquí para ayudarte. Completa el formulario con tu información y nos pondremos en contacto contigo lo antes posible. Tu opinión es muy importante para nosotros.
            </p>

        </div>

                <form class="flex flex-wrap gap-6 p-6 rounded-lg shadow-lg">
        <!-- Nombre -->
        <input 
            class="w-full p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="text" 
            placeholder="Nombre(s)" 
            required
        >

        <!-- Ciudad -->
        <input 
            class="w-full md:w-[48%] p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="text" 
            placeholder="Ciudad de residencia" 
            required
        >

        <!-- Código Postal -->
        <input 
            class="w-full md:w-[48%] p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="text" 
            placeholder="Código Postal" 
            required
        >

        <!-- Teléfono -->
        <input 
            class="w-full p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="tel" 
            placeholder="Número de teléfono" 
            required
        >

        <!-- Correo Electrónico -->
        <input 
            class="w-full p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="email" 
            placeholder="Correo Electrónico" 
            required
        >

        <!-- Tipo de Solicitud -->
        <div class="w-full">
            <label class="text-white font-semibold text-lg mb-2 block" for="asunto">Tipo de solicitud</label>
            <select
            id="asunto"
            class="w-full px-4 py-3 border border-salmon bg-carnita rounded-lg text-white shadow-sm focus:bg-white focus:text-black"
            required
            >
            <option value="" disabled selected>Selecciona un asunto</option>
            <option value="consulta">Consulta general</option>
            <option value="sugerencia">Sugerencia</option>
            <option value="reclamo">Reclamo</option>
            <option value="felicitacion">Felicitación</option>
            <option value="otro">Otro</option>
            </select>
        </div>

        <!-- Mensaje -->
        <div class="w-full">
            <label class="text-white font-semibold text-lg mb-2 block" for="mensaje">Mensaje</label>
            <textarea
            id="mensaje"
            rows="5"
            class="w-full p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800 resize-none"
            placeholder="Escribe aquí tu mensaje..."
            required
            ></textarea>
        </div>

        <!-- Términos -->
        <div class="w-full flex items-center gap-2">
            <input type="checkbox" id="terminos" required>
            <label for="terminos" class="text-white">Acepto los <a href="#" class="underline text-salmon">términos y condiciones</a></label>
        </div>

        <!-- Botón -->
        <div class="w-full flex justify-center">
            <button 
            class="w-1/2 p-3 bg-salmon hover:bg-pink-900 rounded-md text-white font-bold transition cursor-pointer"
            type="submit"
            >
            ENVIAR
            </button>
        </div>
        </form>


    <div class="grid grid-cols-3 md:grid-cols-1 lg:grid-cols-3 gap-2 2xl:gap-16 2xl:place-items-center">

            <div class="bg-carnita flex p-2 rounded-md 2xl:w-60">
                <div class="flex">
                    <img class="w-10" src=" {{asset ('assets/icons/contact/phone.svg') }}">
                </div>
                <div class="mx-auto text-center place-content-center">
                <h2 class="font-bold text-lg">Teléfono</h2>
                <a><p>
               + 52 (33) 3623 2000</p></a>
                </div>
            </div>

            <div class="bg-carnita flex p-2 rounded-md 2xl:w-60">
                <div class="flex">
                    <img class="w-10" src=" {{asset ('assets/icons/contact/email.svg') }}">
                </div>
                <div class="mx-auto text-center place-content-center">
                    <h2 class="font-bold text-lg">Correo Electrónico</h2>
                    <a href="mailto:info@fch-hotels.com" class="text-blue-900 underline">info@fch-hotels.com</a>
                </div>
            </div>

            <div class="bg-carnita flex p-2 rounded-md 2xl:w-60">
                <div class="flex">
                    <img class="w-10" src=" {{asset ('assets/icons/contact/socials.svg') }}">
                </div>
                <div class="mx-auto text-center place-content-center">
                    <h2 class="font-bold text-lg">Correo Electrónico</h2>
                    <p>3321190384</p>
                </div>
            </div>
    </div>

    </div>

    <div class="md:py-30 md:mx-auto">
        <iframe class="w-full h-[400px] sm:h-full md:w-[300px] lg:w-[400px] 2xl:w-[700px]  z-20 relative" src="https://www.google.com/maps/d/embed?mid=1qnjFZuWh1O4AlI9A-2WblCAqR5aE3AY&ehbc=2E312F&noprof=1"></iframe>
    </div>
</section>