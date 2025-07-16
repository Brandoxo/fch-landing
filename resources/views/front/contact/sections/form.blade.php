<section class="bg-red grid grid-cols-1 md:grid-cols-2">
    
    <div class="bg-black/30 left-0 top-0 z-20 w-full h-[1200px] absolute"></div>
    <div class="bg-salmon absolute end-0  start-0 w-1/2 h-[900px] z-10 border-0.5"></div>
    <div class="bg-hielow absolute end-0 w-1/2 h-[900px] top-96 z-10 border-0.5"></div>
    
    <div class="bg-blue absolute top-96 start-0 w-1/2 h-[900px] z-10 border-0.5"></div>
    <div class="bg-aqua absolute end-0 w-1/2 h-[600px]  z-10 border-0.5"></div>


    <div class="p-20 z-20 ">
        <div class="flex flex-wrap gap-4 p-4 text-white">
            <h1 class="text-5xl font-bold  text-center mx-auto text-shadow">CONTÁCTANOS</h1>
            <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque minima asperiores dignissimos dolore, delectus velit enim temporibus iste odio, ab cum in incidunt deserunt voluptatibus placeat ut, ducimus dolor sint.</p>
        </div>

        <form class="flex flex-wrap gap-0 md:gap-7 p-4">
            <input class="w-full p-4 bg-carnita  border-salmon border rounded-lg" type="text" placeholder="Nombre(s)">
            <input class="p-2 bg-carnita  border-salmon border rounded-lg" type="text" placeholder="Ciudad de residencia">
            <input class="p-2 bg-carnita  border-salmon border rounded-lg" type="text" placeholder="Código Postal">
            <br>
            <input class="w-full p-4 bg-carnita  border-salmon border rounded-lg" type="tel" placeholder="Número de teléfono">
            <input class="w-full p-4 bg-carnita  border-salmon border rounded-lg" type="email" placeholder="Correo Electrónico">
            
            <label for="asunto">Tipo de solicitud</label>
            <select
              id="asunto"
              class="form-input custom-select w-full px-4 py-3 border border-salmon bg-carnita rounded-lg shadow-sm focus:bg-white"
              required
            >
              <option value="" disabled selected>Selecciona un asunto</option>
              <option value="consulta">Consulta general</option>
              <option value="sugerencia">Sugerencia</option>
              <option value="reclamo">Reclamo</option>
              <option value="felicitacion">Felicitación</option>
              <option value="otro">Otro</option>
            </select>
            <br>
            <input class="w-10" type="checkbox">Acepto los terminos y condiciones
            <br>
            <button class="w-full p-2 bg-salmon hover:bg-pink-900 rounded-md text-white" type="submit">ENVIAR</button>
        </form>

        <div class="grid grid-cols-3">
            <div>
                <img src="">
                <h2>Teléfono</h2>
                <p>3321190384</p>
            </div>
            <div>
                <img src="">
                <h2>Correo Electrónico</h2>
                <p>3321190384</p>
            </div>
            <div>
                <img src="">
                <h2>Redess</h2>
                <p>3321190384</p>
            </div>
        </div>

    </div>

    <div class="lg:p-20">
        <iframe class="w-full h-full lg:h-[800px] z-20 relative" src="https://www.google.com/maps/d/embed?mid=1qnjFZuWh1O4AlI9A-2WblCAqR5aE3AY&ehbc=2E312F&noprof=1"></iframe>
    </div>
</section>