<header 
    x-data="{ open: false }"
    class="relative flex justify-between items-center px-6 md:px-16 py-4 bg-green-900 text-white shadow-md z-50">

    

    {{-- LOGO + NOMBRE PERFESTA --}}
    <a href="{{ route('landing') }}" 
       class="flex items-center gap-3 group transition">
        <img src="{{ asset('images/logo-perfesta.png') }}" 
             alt="Perfesta Logo"
             class="w-10 h-10 rounded-full object-contain drop-shadow 
                    group-hover:drop-shadow-[0_0_15px_rgba(255,255,255,0.7)] transition-all duration-300">
        <span class="text-2xl font-bold tracking-wide group-hover:text-yellow-400 transition">Perfesta</span>
    </a>

    {{-- LINKS DE NAVEGACIÓN (solo escritorio) --}}
    <nav class="hidden md:flex items-center gap-6 text-lg">
        <a href="{{ route('inicio') }}" 
           class="hover:text-yellow-400 transition {{ request()->routeIs('inicio') ? 'text-yellow-400 font-semibold' : '' }}">
           Inicio
        </a>
        <a href="{{ route('quienes-somos') }}" 
           class="hover:text-yellow-400 transition {{ request()->routeIs('quienes-somos') ? 'text-yellow-400 font-semibold' : '' }}">
           Quiénes Somos
        </a>
    </nav>

    {{-- BOTÓN WHATSAPP (izquierda en desktop, visible arriba en móviles) --}}
    <a href="https://wa.me/{{ config('app.whatsapp_number') }}" target="_blank"
       class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-medium px-4 py-2 rounded-full shadow hover:shadow-xl transition-all duration-300 ease-out">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 .06 5.31.06 11.92c0 
            2.1.55 4.15 1.6 5.97L0 24l6.33-1.67a11.93 11.93 0 0 0 5.67 
            1.45h.01c6.63 0 11.94-5.31 11.94-11.92a11.93 11.93 0 0 0-3.43-8.38z"/>
        </svg>
        <span class="hidden md:inline">WhatsApp</span>
    </a>

    {{-- ICONO MENÚ MÓVIL --}}
    <button @click="open = !open" 
            class="md:hidden focus:outline-none transition">
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" 
             class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" 
             class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>

    {{-- MENÚ MÓVIL DESPLEGABLE --}}
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform -translate-y-4"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-4"
         class="absolute top-full left-0 w-full bg-green-950/95 backdrop-blur-md py-4 flex flex-col items-center space-y-4 md:hidden border-t border-green-700 shadow-lg">
        <a href="{{ route('inicio') }}" 
           class="text-lg font-semibold text-white hover:text-yellow-400 transition {{ request()->routeIs('inicio') ? 'text-yellow-400' : '' }}"
           @click="open=false">
           Inicio
        </a>
        <a href="{{ route('quienes-somos') }}" 
           class="text-lg font-semibold text-white hover:text-yellow-400 transition {{ request()->routeIs('quienes-somos') ? 'text-yellow-400' : '' }}"
           @click="open=false">
           Quiénes Somos
        </a>
    </div>
</header>
