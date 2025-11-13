<footer class="relative bg-green-950 text-green-100 py-16 px-6 md:px-16 font-[Montserrat Alternates] overflow-hidden">

            {{-- Decoraciones de fondo --}}
            <div class="absolute top-0 left-0 w-72 h-72 bg-green-700/30 blur-3xl rounded-full -translate-x-32 -translate-y-20"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-400/20 blur-3xl rounded-full translate-x-32 translate-y-20"></div>

            {{-- Contenido principal --}}
            <div class="relative z-10 max-w-6xl mx-auto grid gap-10 md:grid-cols-2 lg:grid-cols-4">

                {{-- Columna 1 - Marca --}}
                <div>
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-yellow-400 shadow-md hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/logo-perfesta.png') }}" alt="Logo Perfesta" class="w-full h-full object-cover">
                        </div>
                        <h4 class="text-xl font-bold text-white">Perfesta</h4>
                    </div>
                    <p class="text-sm text-green-200 leading-relaxed mb-6">
                        Cócteles artesanales bolivianos hechos con pasión, sabor e innovación.  
                        Perfesta lleva la experiencia del bar directamente a tu hogar.
                    </p>
                    <a href="https://wa.me/59179327294" target="_blank"
                    class="inline-flex items-center gap-2 bg-yellow-400 text-green-900 px-5 py-2.5 rounded-full text-sm font-semibold hover:bg-yellow-300 hover:scale-105 hover:shadow-lg transition-all duration-300">
                        {{-- Icono WhatsApp --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 .06 5.31.06 11.92c0 2.1.55 4.15 1.6 5.97L0 24l6.33-1.67a11.93 11.93 0 0 0 5.67 1.45h.01c6.63 0 11.94-5.31 11.94-11.92a11.93 11.93 0 0 0-3.43-8.38zM12 21.5c-1.76 0-3.47-.45-4.99-1.31l-.36-.2-3.75.98.99-3.64-.24-.38a9.52 9.52 0 0 1-1.47-5.05c0-5.26 4.28-9.54 9.55-9.54 2.55 0 4.95.99 6.76 2.79a9.5 9.5 0 0 1 2.8 6.75c0 5.26-4.28 9.54-9.54 9.54z"/>
                        </svg>
                        WhatsApp
                    </a>
                </div>

                {{-- Columna 2 - Productos --}}
                <div>
                    <h5 class="text-white font-semibold text-lg mb-5 border-b border-green-700 pb-2">Productos</h5>
                    <ul class="space-y-3 text-sm text-green-200">
                        <li class="hover:text-yellow-400 transition-colors duration-300">Mojito Clásico</li>
                        <li class="hover:text-yellow-400 transition-colors duration-300">Piña Colada Premium</li>
                        <li class="hover:text-yellow-400 transition-colors duration-300">Daiquiri de Fresa</li>
                        <li class="hover:text-yellow-400 transition-colors duration-300">Margarita Clásica</li>
                    </ul>
                </div>

                {{-- Columna 3 - Eventos --}}
                <div>
                    <h5 class="text-white font-semibold text-lg mb-5 border-b border-green-700 pb-2">Eventos</h5>
                    <ul class="space-y-3 text-sm text-green-200">
                        <li class="hover:text-yellow-400 transition-colors duration-300">Matrimonios</li>
                        <li class="hover:text-yellow-400 transition-colors duration-300">Bautizos</li>
                        <li class="hover:text-yellow-400 transition-colors duration-300">Quinceañeros</li>
                        <li class="hover:text-yellow-400 transition-colors duration-300">Eventos Corporativos</li>
                    </ul>
                </div>

                {{-- Columna 4 - Contacto --}}
                <div>
                    <h5 class="text-white font-semibold text-lg mb-5 border-b border-green-700 pb-2">Contacto</h5>
                    <ul class="space-y-4 text-sm text-green-200">
                        <li class="flex items-center gap-3">
                            {{-- Teléfono --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 5a11 11 0 0011 11v3a1 1 0 001.447.894l3-1.5a1 1 0 00.553-.894V16a11 11 0 00-11-11H3a1 1 0 00-1 1z"/>
                            </svg>
                            +591 79327294
                        </li>
                        <li class="flex items-center gap-3">
                            {{-- Email --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18a2 2 0 002-2V8a2 2 0 00-2-2H3a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                            </svg>
                            info@perfesta.bo
                        </li>
                        <li class="flex items-center gap-3">
                            {{-- Ubicación --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3zm0 2c-4.418 0-8 1.79-8 4v3h16v-3c0-2.21-3.582-4-8-4z"/>
                            </svg>
                            Cochabamba, Bolivia
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Línea inferior --}}
            <div class="relative z-10 text-center text-green-400 text-xs mt-14 border-t border-green-800 pt-6">
                © {{ date('Y') }} <span class="font-semibold text-yellow-400">Perfesta</span> — Todos los derechos reservados.
            </div>
        </footer>