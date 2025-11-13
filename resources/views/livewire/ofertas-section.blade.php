{{-- COMPONENTE: OfertasSection --}}
<section id="ofertas"
    class="relative bg-gradient-to-r from-green-50 via-white to-yellow-50 text-gray-800 py-24 px-6 md:px-12 font-[Montserrat Alternates] overflow-hidden">

    {{-- 🔝 Botón volver al inicio --}}
    <div class="absolute top-6 right-6">
        <a href="{{ route('landing') }}"
           class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-full font-semibold shadow-md hover:shadow-lg transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Volver al Inicio
        </a>
    </div>

    {{-- TÍTULO PRINCIPAL --}}
    <div class="text-center mb-20">
        <h2 class="text-4xl md:text-5xl font-extrabold text-green-700 mb-3">Ofertas Exclusivas Perfesta</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Disfruta de nuestras promociones especiales para las fiestas más esperadas del año.
            ¡Haz que cada brindis sea inolvidable! 
        </p>
    </div>

    {{-- OFERTAS --}}
    @php
        $ofertas = [
            [
                'titulo' => 'Carnaval de Sabores',
                'fecha' => 'Febrero 2025',
                'desc' => '2x1 en cócteles tropicales para que la alegría del carnaval dure toda la noche. Vive el color, el sabor y la diversión con Perfesta.',
                'img' => 'carnaval.jpg',
                'color' => 'from-pink-500 to-yellow-400',
            ],
            [
                'titulo' => 'Fiestas Patrias',
                'fecha' => 'Agosto 2025',
                'desc' => 'Celebra Bolivia con nuestro combo tricolor: cócteles nacionales y toques artesanales que rinden homenaje al sabor de nuestra tierra.',
                'img' => 'fiestas-patrias.jpg',
                'color' => 'from-green-600 to-yellow-500',
            ],
            [
                'titulo' => 'Fin de Año Brillante',
                'fecha' => 'Diciembre 2025',
                'desc' => 'Despedí el año con estilo con nuestro combo Premium, lleno de cócteles exclusivos, sabores festivos y el toque especial Perfesta. ',
                'img' => 'fin-de-ano.jpg',
                'color' => 'from-yellow-500 to-orange-400',
            ],
        ];
    @endphp

    <div class="flex flex-col space-y-16 max-w-6xl mx-auto">
        @foreach ($ofertas as $oferta)
            <div class="relative flex flex-col md:flex-row bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 border border-gray-100">

                {{-- INFORMACIÓN DE LA OFERTA --}}
                <div class="flex-1 p-8 md:p-12 flex flex-col justify-center text-center md:text-left">
                    <h3 class="text-3xl font-bold text-green-700 mb-2">{{ $oferta['titulo'] }}</h3>
                    <p class="text-sm text-gray-500 mb-4">{{ $oferta['fecha'] }}</p>
                    <p class="text-gray-700 leading-relaxed mb-8">{{ $oferta['desc'] }}</p>

                    {{-- BOTÓN DE PEDIDO --}}
                    <div>
                        <a href="https://wa.me/59179327294?text=Hola!%20Quiero%20más%20información%20sobre%20la%20oferta%20{{ urlencode($oferta['titulo']) }}"
                           target="_blank"
                           class="inline-flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-full shadow-md hover:shadow-xl transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 .06 5.31.06 11.92c0 
                                2.1.55 4.15 1.6 5.97L0 24l6.33-1.67a11.93 11.93 0 0 0 5.67 
                                1.45h.01c6.63 0 11.94-5.31 11.94-11.92a11.93 11.93 0 0 0-3.43-8.38z"/>
                            </svg>
                            Hacer Pedido
                        </a>
                    </div>
                </div>

                {{-- IMAGEN DE LA OFERTA --}}
                <div class="relative flex-1 min-h-[300px] md:min-h-[400px]">
                    <img src="{{ asset('images/ofertas/'.$oferta['img']) }}" 
                         alt="{{ $oferta['titulo'] }}" 
                         class="absolute inset-0 w-full h-full object-cover transform hover:scale-110 transition-all duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-l {{ $oferta['color'] }} opacity-50"></div>
                </div>
            </div>
        @endforeach
    </div>

    

    
</section>
