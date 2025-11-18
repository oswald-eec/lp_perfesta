{{-- COMPONENTE: ProductosSection --}}
<section id="productos"
         class="relative bg-white text-gray-800 py-24 px-6 md:px-16 font-[Montserrat Alternates] overflow-hidden animate-fadeInSlideUp">

    {{-- ANIMACIÓN --}}
    <style>
        @keyframes fadeInSlideUp {
            0% { opacity: 0; transform: translateY(60px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeInSlideUp {
            animation: fadeInSlideUp 1s ease-out both;
        }
    </style>

    {{-- BOTÓN SUPERIOR: Volver al inicio --}}
    <div class="absolute top-6 right-6">
        <a href="{{ route('landing') }}"
           class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-full font-semibold shadow-md hover:shadow-lg transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Volver al Inicio
        </a>
    </div>

    <div class="max-w-6xl mx-auto text-center relative z-10">

        {{-- Título --}}
        <h2 class="text-4xl md:text-5xl font-extrabold text-green-700 mb-4">
            La Magia de la Fiesta en Cada Cóctel
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-20">
            Vive una experiencia única con nuestros cócteles artesanales, elaborados con ingredientes frescos y llenos de color.
        </p>

        {{-- Cards de productos --}}
        <div class="grid gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 place-items-center md:gap-y-20 md:gap-x-10">
            @php
                $productos = [
                    [
                        'img'=>'mojito.png',
                        'desc'=>'Refrescante mezcla de menta, limón y ron blanco.',
                        'slug' => 'mojito-cubano'
                    ],
                    [
                        'img'=>'pina-colada.png',
                        'desc'=>'Dulzura tropical con crema de coco y piña natural.',
                        'slug' => 'pina-colada'
                    ],
                    [
                        'img'=>'kahlua.png',
                        'desc'=>'Café y licor para los momentos más sofisticados.',
                        'slug' => 'kahlua'
                    ],
                    [
                        'img'=>'margarita.png',
                        'desc'=>'El equilibrio perfecto entre dulzura y acidez.',
                        'slug' => 'coctel-radiactivo'
                    ],
                ];
            @endphp

            @foreach($productos as $p)
                <div class="group w-full max-w-[320px] md:max-w-[340px] bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 ease-out animate-fadeInSlideUp">

                    {{-- Imagen del producto dentro del card --}}
                    <div class="relative w-full h-72 md:h-80 bg-gradient-to-b from-green-100 via-white to-white flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/productos/'.$p['img']) }}"
                            alt="Cóctel Perfesta"
                            class="w-56 h-56 md:w-64 md:h-64 object-contain transform group-hover:scale-110 transition-transform duration-500 ease-out drop-shadow-2xl">
                    </div>

                    {{-- Contenido del card --}}
                    <div class="px-6 py-6 text-center flex flex-col justify-between ">
                        <p class="text-gray-600 text-sm italic leading-relaxed mb-4">
                            {{ $p['desc'] }}
                        </p>

                        <div class="flex justify-center">
                            <a href="{{ route('producto.detalle', ['slug' => $p['slug']]) }}"
                            class="inline-block bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-6 py-2 rounded-full shadow hover:shadow-lg transition-all duration-300 ease-out">
                            Ver presentaciones
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

        {{-- MÉTRICAS --}}
        <div class="animate-fadeInSlideUp grid gap-10 sm:grid-cols-3 mt-32 mb-16 text-center">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-700 mb-3 shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3v1H6v4h12v-4h-3v-1c0-1.657-1.343-3-3-3z"/>
                    </svg>
                </div>
                <p class="text-3xl font-extrabold text-green-700">10K+</p>
                <p class="text-sm text-gray-600">Cócteles Servidos<br><span class="text-gray-500">Con amor y dedicación</span></p>
            </div>

            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-600 mb-3 shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <p class="text-3xl font-extrabold text-yellow-600">98%</p>
                <p class="text-sm text-gray-600">Clientes Satisfechos<br><span class="text-gray-500">Que vuelven por más</span></p>
            </div>

            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center rounded-full bg-red-100 text-[#FF6F61] mb-3 shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V4m0 0a8 8 0 100 16V4z"/>
                    </svg>
                </div>
                <p class="text-3xl font-extrabold text-[#FF6F61]">24h</p>
                <p class="text-sm text-gray-600">Preparación<br><span class="text-gray-500">Frescura garantizada</span></p>
            </div>
        </div>

        {{-- CTA MOTIVACIONAL --}}
        <div class="animate-fadeInSlideUp bg-gradient-to-r from-green-600 via-green-500 to-[#FF6F61] text-white rounded-2xl py-12 px-6 md:px-16 shadow-xl hover:shadow-2xl transition-all duration-300">
            <h3 class="text-2xl md:text-3xl font-bold mb-4">¿Tienes un pedido especial o deseas algo personalizado?</h3>
            <p class="text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
                Escríbenos directamente y te ayudaremos a preparar el cóctel perfecto para tu evento.  
                ¡Estamos disponibles para atenderte con gusto!
            </p>
            <a href="https://wa.me/{{ config('app.whatsapp_number') }}" target="_blank"
               class="inline-block bg-white text-green-700 font-semibold px-8 py-3 rounded-full hover:bg-green-50 active:scale-95 transition-all duration-300">
                💬 Consultar por WhatsApp
            </a>
        </div>
    </div>

    {{-- DECORACIONES --}}
    <div class="absolute top-0 left-0 w-80 h-80 bg-green-100/40 rounded-full blur-3xl -translate-x-20 -translate-y-16"></div>
    <div class="absolute bottom-0 right-0 w-[26rem] h-[26rem] bg-yellow-100/30 rounded-full blur-3xl translate-x-24 translate-y-16"></div>
</section>
