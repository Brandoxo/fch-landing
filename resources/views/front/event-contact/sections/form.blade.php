    <div class="p-4 py-20 z-20">
        <div class="flex flex-wrap gap-4 p-4 text-white">
            <h1 class="text-4xl md:text-5xl font-bold text-center text-shadow mx-auto">CONTÁCTANOS</h1>
            <p class="w-3/4 mx-auto text-center font-semibold">
            ¿Tienes dudas, comentarios o sugerencias? Estamos aquí para ayudarte. Completa el formulario con tu información y nos pondremos en contacto contigo lo antes posible. Tu opinión es muy importante para nosotros.
            </p>

        </div>

                <form class="flex flex-wrap gap-6 p-6 rounded-lg shadow-lg" action="{{route('event.contact.send')}}" method="POST">
                 @csrf
                 @method('POST')
    
        <input 
            class="w-full p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="text" 
            name="name"
            placeholder="Nombre(s)" 
            required
            value="{{old('name')}}"
        >

    
        <input 
            class="w-full md:w-[48%] p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="text" 
            name="city"
            placeholder="Ciudad de residencia" 
            required
            value="{{old('city')}}"
        >

    
        <input 
            class="w-full md:w-[48%] p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="text" 
            name="cp"
            placeholder="Código Postal" 
            required
            value="{{old('cp')}}"
        >

    
        <input 
            class="w-full p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="tel" 
            name="phone"
            placeholder="Número de teléfono" 
            required
            value="{{old('phone')}}"
        >

    
        <input 
            class="w-full p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800" 
            type="email" 
            name="email"
            placeholder="Correo Electrónico" 
            required
            value="{{old('email')}}"
        >

    
        <div class="w-full">
            <label class="text-white font-semibold text-lg mb-2 block" for="asunto">Tipo de solicitud</label>
            <select
            id="subject"
            class="w-full px-4 py-3 border border-salmon bg-carnita rounded-lg text-white shadow-sm focus:bg-white focus:text-black"
            required
            value="{{old('subject')}}"
            >
            <option value="" disabled selected>Selecciona un asunto</option>
            <option value="consulta">Consulta general</option>
            <option value="sugerencia">Sugerencia</option>
            <option value="reclamo">Reclamo</option>
            <option value="felicitacion">Felicitación</option>
            <option value="otro">Otro</option>
            </select>
        </div>

    
        <div class="w-full">
            <label class="text-white font-semibold text-lg mb-2 block" for="mensaje">Mensaje</label>
            <textarea
            id="mensaje"
            name="message"
            rows="5"
            class="w-full p-4 bg-carnita border border-salmon rounded-lg text-white placeholder-gray-800 resize-none"
            placeholder="Escribe aquí tu mensaje..."
            required
            >value="{{old('message')}}"</textarea>
        </div>

    
        <div class="w-full flex items-center gap-2">
            <input type="checkbox" id="terminos" required>
            <lab
            value="{{old('name')}}"el for="terminos" class="text-white">Acepto los <a href="#" class="underline text-salmon">términos y condiciones</a></label>
        </div>

    
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

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
    Toastify({
        text: "{{ $error }}",
        duration: 3000,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "linear-gradient(to right, #5E6C2C, #3E490F)",
        },
        onClick: function(){} // Callback after click
    }).showToast();
    @endforeach
@endif

@if (session()->has('success'))

Swal.fire(
  '¡Gracias!',
  'Se ha realizado correctamente tu solicitud!',
  'success'
)
    
@endif
</script>
<!-- /Toastify -->

<script>
    function toggleInputLabel() {
        const inputs = document.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('keyup', () => {
                const label = (input?.id) ? document.querySelector(`label[for=${input.id}]`) : document.createElement('label');
                if(input.value.length > 0)
                {
                    label.classList.remove('opacity-0');
                    label.classList.add('opacity-50');
                }
                else
                {
                    label.classList.remove('opacity-50');
                    label.classList.add('opacity-0');
                }
            });
        });
    }

    toggleInputLabel();
</script>

