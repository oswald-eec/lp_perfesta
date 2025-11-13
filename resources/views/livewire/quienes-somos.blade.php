{{-- PÁGINA "QUIÉNES SOMOS" --}}
<div class="bg-white text-gray-800 font-[Montserrat Alternates]">

    {{-- HEADER --}}
    @livewire('layout.header')

    <section id="quienes-somos" class="font-[Montserrat Alternates] text-gray-800 bg-gradient-to-b from-white via-green-50 to-white">

    {{-- HERO CON VIDEO DE BIENVENIDA --}}
    <div class="relative w-full h-[80vh] flex items-center justify-center overflow-hidden">
        <video autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover brightness-75">
            <source src="{{ asset('videos/perfesta-presentacion.mp4') }}" type="video/mp4">
        </video>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 text-center text-white px-6 max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">
                Conoce a Perfesta
            </h1>
            <p class="text-lg md:text-xl text-white/90 mb-6">
                Donde el sabor, la innovación y la alegría se mezclan para hacer de cada evento una experiencia inolvidable 🍸
            </p>
            <a href="#historia"
               class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg transition-all duration-300">
                Descubre más
            </a>
        </div>
    </div>

    {{-- SECCIÓN: QUIÉNES SOMOS --}}
    <section id="historia" class="max-w-7xl mx-auto px-6 md:px-16 py-24 text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold text-green-700 mb-6">¿Quiénes somos?</h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed">
            Somos una empresa dedicada a brindar <strong>experiencias únicas</strong> a través de la preparación y servicio de cócteles artesanales,
            ofreciendo atención personalizada a domicilio y en eventos masivos.  
            Contamos con bartenders capacitados, insumos de alta calidad y una imagen moderna que combina sabor, presentación y profesionalismo.
        </p>
        <div class="mt-10">
            <img src="{{ asset('images/quienes-somos/equipo.jpg') }}" 
                 alt="Equipo Perfesta" 
                 class="w-full max-w-4xl mx-auto rounded-3xl shadow-2xl object-cover">
        </div>
    </section>

    {{-- SECCIÓN: QUÉ QUEREMOS --}}
    <section class="max-w-7xl mx-auto px-6 md:px-16 py-20 grid md:grid-cols-2 gap-12 items-center">
        <div class="order-2 md:order-1">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-4">¿Qué queremos?</h2>
            <p class="text-gray-700 leading-relaxed">
                Queremos posicionarnos como la empresa líder en <strong>coctelería móvil de Bolivia</strong>, reconocida por su calidad, innovación y excelencia en servicio.  
                Buscamos que cada cliente disfrute momentos memorables, ya sea en su hogar o en grandes celebraciones.
            </p>
        </div>
        <div class="order-1 md:order-2">
            <img src="{{ asset('images/quienes-somos/meta.jpg') }}" 
                 alt="Misión Perfesta"
                 class="rounded-2xl shadow-xl w-full object-cover">
        </div>
    </section>

    {{-- SECCIÓN: CÓMO LO HAREMOS --}}
    <section class="bg-green-700 text-white py-20 px-6 md:px-16">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-8">¿Cómo lo haremos?</h2>
            <ul class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 text-left text-white/90">
                @foreach([
                    'Ofreciendo una amplia carta de cócteles artesanales y personalizados.',
                    'Implementando un sistema eficiente de pedidos y entregas a domicilio.',
                    'Participando en ferias, festivales y eventos corporativos.',
                    'Capacitándonos constantemente en mixología y atención al cliente.',
                    'Aplicando estrategias de marketing digital y alianzas con organizadores.',
                    'Manteniendo altos estándares de higiene y control de calidad.'
                ] as $item)
                <li class="flex items-start gap-3 bg-white/10 p-4 rounded-xl backdrop-blur-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2a10 10 0 1010 10A10.011 10.011 0 0012 2zm-1 15l-5-5 1.41-1.41L11 14.17l6.59-6.59L19 9z"/>
                    </svg>
                    <span>{{ $item }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- SECCIÓN: PARA QUIÉN LO HACEMOS --}}
    <section class="max-w-7xl mx-auto px-6 md:px-16 py-20 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <img src="{{ asset('images/quienes-somos/eventos.jpg') }}" 
                 alt="Eventos Perfesta" 
                 class="rounded-2xl shadow-xl w-full object-cover">
        </div>
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-4">¿Para quién lo hacemos?</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Para personas y empresas que buscan una experiencia diferente en sus celebraciones:
            </p>
            <ul class="text-gray-700 space-y-2">
                <li>🎂 Cumpleaños, matrimonios, despedidas, reuniones corporativas.</li>
                <li>🎪 Ferias, conciertos y eventos masivos.</li>
                <li>🏠 Clientes que valoran el buen gusto, la presentación y la comodidad del servicio a domicilio.</li>
            </ul>
        </div>
    </section>

    {{-- SECCIÓN: DIFERENCIALES --}}
    <section class="bg-gradient-to-r from-green-600 via-green-700 to-green-800 text-white py-20 px-6 md:px-16 text-center">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-6">Lo que nos diferencia</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
                @foreach([
                    ['icon'=>'🍹','text'=>'Cócteles artesanales con ingredientes naturales y frescos.'],
                    ['icon'=>'⚡','text'=>'Servicio flexible, rápido y profesional.'],
                    ['icon'=>'🎨','text'=>'Imagen visual atractiva y coherente.'],
                    ['icon'=>'💫','text'=>'Experiencia integral: sabor, ambientación y atención personalizada.']
                ] as $diferencia)
                    <div class="bg-white/10 p-6 rounded-2xl shadow-md hover:bg-white/20 transition-all">
                        <div class="text-4xl mb-3">{{ $diferencia['icon'] }}</div>
                        <p class="text-white/90">{{ $diferencia['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECCIÓN: COMPROMISO FINAL --}}
    <section class="py-24 px-6 md:px-16 text-center bg-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-extrabold text-green-700 mb-6">Nuestro compromiso</h2>
            <p class="text-gray-700 text-lg leading-relaxed mb-10">
                Brindar calidad, responsabilidad y alegría en cada evento,  
                creando momentos que se disfrutan con cada sorbo.
            </p>
            <a href="https://wa.me/59179327294" target="_blank"
               class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-10 py-4 rounded-full shadow-lg hover:shadow-2xl transition-all duration-300">
                💬 Contáctanos y hagamos tu evento inolvidable
            </a>
        </div>
    </section>

</section>


    {{-- FOOTER --}}
    @livewire('layout.footer')
</div>
