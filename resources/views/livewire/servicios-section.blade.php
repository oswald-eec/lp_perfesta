<section 
    x-data="{ 
        seleccionado: null,
        paquete: null,
        bebidas: [],
        seleccionar(opcion, nombre, tipo) {
            this.seleccionado = opcion;
            this.paquete = nombre;

            if (tipo === 'exclusivo') {
                this.bebidas = [
                    'Whisky Premium',
                    'Ron Añejo',
                    'Tequila Gold',
                    'Vodka Premium',
                    'Gin London Dry',
                    'Singani de Casa Real',
                    'Licores importados'
                ];
            } else if (tipo === 'clasico') {
                this.bebidas = [
                    'Ron Clásico',
                    'Vodka Regular',
                    'Gin Estándar',
                    'Tequila Silver',
                    'Whisky Nacional',
                    'Singani Tradicional',
                    'Licores nacionales',
                    'Bebidas sin alcohol'
                ];
            }
        }
    }"
    class="relative min-h-screen bg-gradient-to-br from-green-50 via-white to-green-100 py-20 px-6 md:px-16 font-[Montserrat Alternates]">

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

    {{-- 🏷️ Encabezado --}}
    <div class="text-center mb-16 mt-10">
        <h2 class="text-4xl md:text-5xl font-extrabold text-green-700 mb-4">
            Perfesta para tus celebraciones
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Matrimonios, Bautizos, 15 Años y más — <br class="hidden md:block">Hacemos de cada evento una experiencia inolvidable 🍸
        </p>
    </div>

    {{-- 🧩 GRID DE SERVICIOS --}}
    <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">
        @php
            $servicios = [
                [
                    'nombre' => 'Paquete Íntimo',
                    'desc' => 'Perfecto para reuniones familiares y celebraciones pequeñas.',
                    'vasos' => 100,
                    'img' => 'intimo.jpg',
                    'exclusivo' => 280,
                    'clasico' => 250
                ],
                [
                    'nombre' => 'Paquete Celebración',
                    'desc' => 'Ideal para fiestas de 15 años, bautizos y aniversarios.',
                    'vasos' => 150,
                    'img' => 'celebracion.jpg',
                    'exclusivo' => 350,
                    'clasico' => 300
                ],
                [
                    'nombre' => 'Paquete Premium',
                    'desc' => 'Para bodas y eventos especiales de gran envergadura.',
                    'vasos' => 250,
                    'img' => 'premium.jpg',
                    'exclusivo' => 450,
                    'clasico' => 400
                ],
            ];
        @endphp

        @foreach ($servicios as $s)
        <div 
            class="relative bg-white rounded-3xl shadow-lg border border-green-100 overflow-hidden 
                   hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 ease-out group">

            {{-- Imagen del servicio --}}
            <div class="relative">
                <img src="{{ asset('images/servicios/'.$s['img']) }}" 
                     alt="{{ $s['nombre'] }}" 
                     class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-green-900/25 to-transparent"></div>
            </div>

            {{-- Contenido --}}
            <div class="p-8 text-center">
                <h3 class="text-2xl font-bold text-green-700 mb-3">{{ $s['nombre'] }}</h3>
                <p class="text-gray-600 mb-4">{{ $s['desc'] }}</p>

                {{-- Cantidad de vasos --}}
                <div class="flex items-center justify-center gap-2 mb-4 text-green-700 font-semibold text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ $s['vasos'] }} vasos incluidos</span>
                </div>

                {{-- Bebidas incluidas (siempre visibles por UX) --}}
                <div class="mb-6 bg-green-50 border border-green-200 rounded-xl py-3">
                    <p class="text-green-800 font-semibold">Bebidas incluidas:</p>
                    <p class="text-sm text-gray-600">Cócteles artesanales como Mojito, Piña Colada, Margarita y Kahlúa</p>
                </div>

                {{-- Selección de opción --}}
                <h4 class="text-green-800 font-semibold mb-3">Seleccione una opción:</h4>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    {{-- EXCLUSIVO --}}
                    <button 
                        @click="seleccionar('Exclusivo - {{ $s['exclusivo'] }} Bs', '{{ $s['nombre'] }}', 'exclusivo')" 
                        :class="seleccionado === 'Exclusivo - {{ $s['exclusivo'] }} Bs' && paquete === '{{ $s['nombre'] }}'
                            ? 'ring-4 ring-yellow-400 bg-green-600 text-white scale-105'
                            : 'bg-green-500 text-white hover:bg-green-600'"
                        class="rounded-xl p-4 shadow transition-all duration-300 ease-out">
                        <h4 class="font-semibold text-lg">Exclusivo</h4>
                        <p class="text-2xl font-bold mt-1">{{ $s['exclusivo'] }} Bs</p>
                    </button>

                    {{-- CLÁSICO --}}
                    <button 
                        @click="seleccionar('Clásico - {{ $s['clasico'] }} Bs', '{{ $s['nombre'] }}', 'clasico')" 
                        :class="seleccionado === 'Clásico - {{ $s['clasico'] }} Bs' && paquete === '{{ $s['nombre'] }}'
                            ? 'ring-4 ring-green-400 bg-yellow-400 text-green-900 scale-105'
                            : 'bg-yellow-400 text-green-900 hover:bg-yellow-300'"
                        class="rounded-xl p-4 shadow transition-all duration-300 ease-out">
                        <h4 class="font-semibold text-lg">Clásico</h4>
                        <p class="text-2xl font-bold mt-1">{{ $s['clasico'] }} Bs</p>
                    </button>
                </div>

                {{-- Bebidas según selección --}}
                <template x-if="paquete === '{{ $s['nombre'] }}' && seleccionado">
                    <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6 animate-fadeIn">
                        <h5 class="text-green-800 font-semibold mb-2" 
                            x-text="seleccionado.includes('Exclusivo') ? 'Tragos premium e ingredientes importados' : 'Bebidas artesanales de alta calidad'"></h5>
                        <ul class="text-sm text-gray-700 space-y-1">
                            <template x-for="bebida in bebidas" :key="bebida">
                                <li> <span x-text="bebida"></span></li>
                            </template>
                        </ul>
                    </div>
                </template>

                {{-- Botón pedido --}}
                <button 
                    :disabled="paquete !== '{{ $s['nombre'] }}' || !seleccionado"
                    :class="(paquete === '{{ $s['nombre'] }}' && seleccionado)
                        ? 'bg-green-600 hover:bg-green-700 text-white cursor-pointer'
                        : 'bg-gray-300 text-gray-500 cursor-not-allowed'"
                    @click="window.open('https://wa.me/{{ config('app.whatsapp_number') }}?text=Hola!%20Estoy%20interesado%20en%20el%20' + encodeURIComponent('{{ $s['nombre'] }}') + '%20(' + encodeURIComponent(seleccionado) + ')', '_blank')"
                    class="w-full rounded-full py-3 font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                     Realizar Pedido
                </button>
            </div>
        </div>
        @endforeach
    </div>

    {{-- 📊 MÉTRICAS DE IMPACTO --}}
    <div class="grid gap-10 sm:grid-cols-3 mt-28 mb-16 text-center max-w-6xl mx-auto">
        <div class="flex flex-col items-center">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-700 mb-3 shadow-inner">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l3-3m-3 3l-3-3" />
                </svg>
            </div>
            <p class="text-3xl font-extrabold text-green-700">+200</p>
            <p class="text-sm text-gray-600">Eventos realizados<br><span class="text-gray-500">en toda Bolivia</span></p>
        </div>

        <div class="flex flex-col items-center">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-600 mb-3 shadow-inner">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <p class="text-3xl font-extrabold text-yellow-600">98%</p>
            <p class="text-sm text-gray-600">Clientes felices<br><span class="text-gray-500">y satisfechos</span></p>
        </div>

        <div class="flex flex-col items-center">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-red-100 text-[#FF6F61] mb-3 shadow-inner">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V4m0 0a8 8 0 100 16V4z"/>
                </svg>
            </div>
            <p class="text-3xl font-extrabold text-[#FF6F61]">24h</p>
            <p class="text-sm text-gray-600">Respuesta inmediata<br><span class="text-gray-500">para tu evento</span></p>
        </div>
    </div>

    {{-- 🎯 CTA FINAL --}}
    <div class="max-w-5xl mx-auto bg-gradient-to-r from-green-600 via-green-500 to-[#FF6F61] text-white rounded-3xl py-14 px-8 md:px-16 shadow-2xl text-center">
        <h3 class="text-3xl md:text-4xl font-bold mb-4"> Planifica tu evento con Perfesta</h3>
        <p class="text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed text-lg">
            Creamos experiencias únicas para cada tipo de celebración. Desde eventos íntimos hasta fiestas masivas, 
            Perfesta convierte cada brindis en un recuerdo inolvidable.  
        </p>
        <a href="https://wa.me/{{ config('app.whatsapp_number') }}" target="_blank"
           class="inline-block bg-white text-green-700 font-semibold px-10 py-4 rounded-full hover:bg-green-50 active:scale-95 transition-all duration-300 shadow-lg hover:shadow-2xl">
            💬 Consultar con un asesor
        </a>
    </div>

    {{-- Animación fade --}}
    <style>
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fadeIn { animation: fadeIn 0.5s ease-out; }
    </style>
</section>



