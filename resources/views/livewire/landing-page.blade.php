{{-- LANDING PAGE MEJORADA --}}
<div>
    <section 
        id="hero" 
        x-data="{ 
            currentSlide: 0, 
            slides: ['bg-perfesta.jpg', 'bg-perfesta2.jpg', 'bg-perfesta3.jpg'], 
            openMenu: false 
        }"
        x-init="setInterval(() => currentSlide = (currentSlide + 1) % slides.length, 5000)"
        class="relative w-full h-screen flex flex-col justify-between bg-black text-white overflow-hidden">

        {{-- BACKGROUND CAROUSEL --}}
        <template x-for="(slide, index) in slides" :key="index">
            <div 
                x-show="currentSlide === index"
                x-transition:enter="transition-opacity ease-out duration-1000"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                class="absolute inset-0 w-full h-full">

                <img :src="'/images/' + slide" 
                     alt="Fondo Perfesta" 
                     class="w-full h-full object-cover object-center">

                <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/70 to-green-900/80"></div>
            </div>
        </template>

        {{-- HEADER --}}
        <header class="relative z-20 flex justify-between items-center px-6 md:px-16 py-4">

            {{-- INICIO --}}
            <a href="{{ url('/inicio') }}" 
                class="hidden md:inline-block text-lg font-semibold hover:text-yellow-400 transition-all">
                Inicio
            </a>

            {{-- PLAYLIST --}}
            <a href="https://www.youtube.com/playlist?list=YOUR_PLAYLIST_ID" 
               target="_blank"
               class="flex items-center gap-2 text-lg font-semibold hover:text-yellow-400 transition-all">
                <x-icons.play class="w-6 h-6"/>
                Playlist Perfesta
            </a>

            {{-- WHATSAPP --}}
            <a href="https://wa.me/{{ config('app.whatsapp_number') }}"
                target="_blank"
                class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-medium px-4 py-2 rounded-full shadow hover:shadow-xl transition-all duration-300 ease-out">
                <x-icons.whatsapp class="w-5 h-5"/>
                <span class="hidden md:inline">WhatsApp</span>
            </a>

            {{-- HAMBURGER --}}
            <button @click="openMenu = !openMenu" class="md:hidden text-white focus:outline-none">
                <x-icons.menu class="w-8 h-8"/>
            </button>

            {{-- MENU MOVIL --}}
            <div x-show="openMenu" 
                x-transition
                class="absolute top-16 left-0 w-full bg-black/85 backdrop-blur-md py-4 flex flex-col items-center space-y-3 md:hidden z-30">
                <a href="{{ url('/inicio') }}" 
                   class="text-white text-lg font-semibold hover:text-yellow-400 transition-all">
                    Inicio
                </a>
            </div>
        </header>

        {{-- HERO CONTENT --}}
        <div class="relative z-10 flex flex-col items-center justify-center text-center px-6 mt-6 md:mt-10 flex-grow">

            <img src="{{ asset('images/logo-perfesta.png') }}" 
                    alt="Logo Perfesta"
                    class="w-28 h-28 md:w-36 md:h-36 rounded-full object-contain mb-6 drop-shadow-xl hover:drop-shadow-[0_0_25px_rgba(255,255,255,0.8)] transition-all duration-500 ease-out">

            <h1 class="font-[Roboto Mono] text-5xl md:text-7xl font-extrabold tracking-tight text-white drop-shadow-lg">
                Per-festa
            </h1>

            <p class="mt-3 text-lg md:text-xl text-yellow-300 font-semibold">Sabor e Innovación</p>

            <p class="mt-6 text-2xl md:text-3xl font-semibold text-white max-w-3xl leading-tight italic">
                “Llevamos la fiesta donde estés tú”
            </p>


            {{-- BOTONES DE NAVEGACIÓN --}}
                <div class="flex flex-col md:flex-row justify-center items-center gap-4 mt-10 mb-10 w-full max-w-md">
                    <a href="{{ route('productos') }}"
                    class="w-full md:w-auto bg-green-500 text-white text-lg font-semibold px-8 py-3 rounded-full 
                    shadow-lg hover:bg-green-600 hover:shadow-[0_0_20px_rgba(34,197,94,0.6)] hover:scale-110 hover:-translate-y-1 transition-all duration-300 ease-out">
                        Cocteles
                    </a>
                    <a href="{{ route('servicios') }}"
                    class="w-full md:w-auto bg-[#FF6F61] hover:bg-[#ff836f] text-white text-lg font-semibold px-8 py-3 rounded-full 
                    shadow-lg hover:shadow-2xl hover:scale-110 hover:-translate-y-1 transition-all duration-300 ease-out"
                    style="background-color:#FF6F61;"
                            onmouseover="this.style.boxShadow='0 0 20px rgba(255,111,97,0.6)'; this.style.transform='scale(1.05)'"
                            onmouseout="this.style.boxShadow=''; this.style.transform='scale(1)'">
                        Servicios
                    </a>
                    <a href="{{ route('ofertas') }}"
                    class="w-full md:w-auto bg-yellow-500 text-white text-lg font-semibold px-8 py-3 rounded-full 
                    shadow-lg hover:bg-yellow-600 hover:shadow-[0_0_20px_rgba(234,179,8,0.6)] hover:scale-110 hover:-translate-y-1 transition-all duration-300 ease-out">
                        Ofertas
                    </a>
                </div>

            {{-- FRASE LEGAL --}}
            <div class="pb-6">
                <p class="text-base text-white/80 max-w-lg leading-snug">
                    El consumo excesivo de alcohol es dañino para la salud.<br>
                    Venta prohibida a menores de edad.
                </p>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script>
document.addEventListener('scrollToHero', () => {
    const hero = document.getElementById('hero');
    if (hero) {
        hero.scrollIntoView({ behavior: 'smooth' });
    }
});
</script>
@endpush
