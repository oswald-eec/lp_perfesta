<div class="bg-white text-gray-800 font-[Montserrat Alternates]" 
     x-data="{ slide: 0, slides: ['actividad1.jpg', 'actividad2.jpg', 'actividad3.jpg'] }" 
     x-init="setInterval(() => slide = (slide + 1) % slides.length, 5000)">

    {{-- HEADER --}}
    @livewire('layout.header', ['whatsapp' => $whatsapp])

    {{-- CARRUSEL DE ACTIVIDADES --}}
    <section id="inicio" class="relative h-[80vh] overflow-hidden">
        <template x-for="(img, index) in slides" :key="index">
            <div x-show="slide === index"
                 x-transition:enter="transition-opacity ease-out duration-1000"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 class="absolute inset-0">
                <img :src="'/images/' + img" class="w-full h-full object-cover object-center" alt="Actividad Perfesta">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>
        </template>

        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white z-10">
            <h1 class="text-4xl md:text-6xl font-extrabold drop-shadow-lg">Vive la Experiencia Perfesta</h1>
            <p class="mt-4 text-lg md:text-xl max-w-xl">Momentos únicos, cócteles artesanales y buena vibra en cada celebración.</p>
        </div>
    </section>

    {{-- CARDS DE CATEGORÍAS --}}
    <section class="py-24 bg-gradient-to-b from-white via-green-50 to-white">
        <div class="max-w-6xl mx-auto text-center px-6 md:px-0">
            <h2 class="text-4xl md:text-5xl font-extrabold text-green-700 mb-14">
                Descubre todo lo que ofrecemos
            </h2>

            <div class="grid gap-10 md:grid-cols-3">
                @foreach($categorias as $item)
                    <div class="relative group bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-2xl border border-green-100 transition-all duration-500 ease-out hover:-translate-y-2">
                        <div class="relative w-full h-64 md:h-72 overflow-hidden">
                            <img src="{{ asset('images/'.$item['img']) }}" alt="{{ $item['titulo'] }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t {{ $item['color'] }} opacity-60 group-hover:opacity-80 transition-all duration-500 ease-in-out"></div>
                        </div>
                        <div class="p-8 flex flex-col justify-between text-center">
                            <h3 class="text-2xl font-bold text-green-700 mb-2">{{ $item['titulo'] }}</h3>
                            <p class="text-gray-600 mb-6">{{ $item['desc'] }}</p>
                        </div>
                        <div class="hidden md:flex absolute inset-0 items-center justify-center bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <a href="{{ $item['ruta'] }}" class="bg-white text-green-700 font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-green-50 transition">
                                Ver {{ $item['titulo'] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- TESTIMONIOS --}}
    <section id="testimonios" class="relative bg-green-900 py-24 px-6 md:px-16 text-center overflow-hidden text-white">
        <div class="max-w-6xl mx-auto relative z-10">
            <h2 class="text-4xl md:text-5xl font-extrabold text-yellow-400 mb-3">Lo que dicen nuestros clientes</h2>
            <p class="text-green-100 mb-14 text-lg">Miles de personas ya disfrutan <span class="text-yellow-300 font-semibold">Perfesta</span></p>

            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
                @foreach($testimonios as $item)
                    <div class="bg-white/10 backdrop-blur-md shadow-lg rounded-2xl p-8 border border-white/10 hover:shadow-yellow-500/20 hover:-translate-y-1 transition-all duration-500 ease-out animate-fadeInUp">
                        <div class="flex justify-center mb-5">
                            @for ($i = 0; $i < 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 .587l3.668 7.431L24 9.753l-6 5.853L19.335 24 12 19.897 4.665 24 6 15.606 0 9.753l8.332-1.735z"/>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-green-50 italic mb-6 leading-relaxed">“{{ $item['texto'] }}”</p>
                        <p class="font-semibold text-yellow-400 text-lg">{{ $item['nombre'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CONTACTO --}}
    <section id="contacto" class="relative bg-gradient-to-r from-green-700 via-green-600 to-[#FF6F61] text-white py-24 px-6 md:px-16 overflow-hidden font-[Montserrat Alternates]">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-14 items-center relative z-10">

            {{-- Columna de información --}}
            <div>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-5">¿Listo para tu primera orden?</h2>
                <p class="text-lg text-green-50 mb-10">
                    Contáctanos y celebra con los mejores cócteles artesanales, preparados para llevar la fiesta a donde estés.
                </p>

                <ul class="space-y-5 text-green-50">
                    <li class="flex items-center gap-3">
                        {{-- Teléfono --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 5a11 11 0 0011 11v3a1 1 0 001.447.894l3-1.5a1 1 0 00.553-.894V16a11 11 0 00-11-11H3a1 1 0 00-1 1z"/>
                        </svg>
                        <span class="text-base">+591 72792260</span>
                    </li>

                    <li class="flex items-center gap-3">
                        {{-- Email --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18a2 2 0 002-2V8a2 2 0 00-2-2H3a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-base">info@perfesta.bo</span>
                    </li>

                    <li class="flex items-center gap-3">
                        {{-- Ubicación --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3zm0 2c-4.418 0-8 1.79-8 4v3h16v-3c0-2.21-3.582-4-8-4z"/>
                        </svg>
                        <span class="text-base">Cochabamba, Bolivia</span>
                    </li>
                </ul>

                <a href="https://wa.me/{{ config('app.whatsapp_number') }}" target="_blank"
                class="inline-flex items-center gap-3 mt-10 bg-yellow-400 text-green-900 px-7 py-3 rounded-full font-semibold shadow-lg hover:bg-yellow-300 hover:scale-105 hover:shadow-lg transition-all duration-300">
                    {{-- Icono de WhatsApp --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 .06 5.31.06 11.92c0 2.1.55 4.15 1.6 5.97L0 24l6.33-1.67a11.93 11.93 0 0 0 5.67 1.45h.01c6.63 0 11.94-5.31 11.94-11.92a11.93 11.93 0 0 0-3.43-8.38zM12 21.5c-1.76 0-3.47-.45-4.99-1.31l-.36-.2-3.75.98.99-3.64-.24-.38a9.52 9.52 0 0 1-1.47-5.05c0-5.26 4.28-9.54 9.55-9.54 2.55 0 4.95.99 6.76 2.79a9.5 9.5 0 0 1 2.8 6.75c0 5.26-4.28 9.54-9.54 9.54z"/>
                    </svg>
                    Escribir por WhatsApp
                </a>
            </div>

            {{-- Componente Livewire --}}
            <livewire:contacto-form />
        </div>

        {{-- Efectos de fondo principales --}}
        <div class="absolute top-0 left-0 w-96 h-96 bg-green-400/30 blur-3xl rounded-full -translate-x-32 -translate-y-32"></div>
        <div class="absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-yellow-300/20 blur-3xl rounded-full translate-x-32 translate-y-24"></div>
    </section>

    {{-- FOOTER --}}
    @livewire('layout.footer')
</div>
