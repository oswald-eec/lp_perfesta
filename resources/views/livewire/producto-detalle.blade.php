<section 
    x-data="{ 
        presentacion: 'Vaso 500ml', 
        cantidad: 1, 
        precios: { 'Vaso 500ml': 13, 'Botella 2L': 72, 'Sixpack': 125 },
        get total() { return (this.precios[this.presentacion] * this.cantidad).toFixed(2) }
    }"
    class="min-h-screen bg-gradient-to-l from-green-400 via-green-600 to-green-800 text-gray-900 font-[Montserrat Alternates] py-16 px-6 md:px-20">

    @if ($producto)
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

        {{-- 🖼️ Imagen principal y galería --}}
        <div class="space-y-6">
            <div class="relative w-full aspect-square  rounded-2xl flex items-center justify-center overflow-hidden ">
                <img src="{{ asset('images/productos/'.$producto['imagenes'][0]) }}" 
                     alt="{{ $producto['nombre'] }}" 
                     class="object-contain w-4/5 h-4/5 transition-transform duration-500 hover:scale-105 drop-shadow-[0_0_20px_rgba(255,255,255,0.7)]">
            </div>

            {{-- Miniaturas --}}
            <div class="flex justify-center flex-wrap gap-3">
                @foreach($producto['imagenes'] as $img)
                    <img src="{{ asset('images/productos/'.$img) }}" 
                         class="w-20 h-20 md:w-24 md:h-24 object-cover rounded-lg border border-white/40 hover:border-yellow-300 hover:scale-110 cursor-pointer transition-all duration-300 ease-out shadow-md">
                @endforeach
            </div>
        </div>

        {{-- 💬 Información del producto --}}
        <div class="space-y-5 text-left">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white drop-shadow-lg flex items-center gap-3">
                {{ $producto['nombre'] }}
                
            </h2>

            <p class="text-green-50 text-base md:text-lg leading-relaxed">
                {{ $producto['descripcion'] }}
            </p>

            {{-- Ingredientes --}}
            <div class="bg-white/10 rounded-lg p-4 mt-4 backdrop-blur-sm border border-white/20">
                <h3 class="text-white font-semibold mb-1 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 4a8 8 0 100-16 8 8 0 000 16z"/>
                    </svg>
                    Ingredientes:
                </h3>
                <p class="text-green-100 text-sm">{{ $producto['ingredientes'] }}</p>
            </div>

            {{-- Selección de presentación --}}
            <div class="mt-6">
                <h4 class="text-white font-semibold mb-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5v14"/>
                    </svg>
                    Tipo de presentación:
                </h4>
                <div class="flex flex-wrap gap-3">
                    <template x-for="(precio, key) in precios" :key="key">
                        <button 
                            @click="presentacion = key"
                            :class="presentacion === key 
                                ? 'bg-yellow-400 text-green-900' 
                                : 'bg-white/20 text-white hover:bg-white/40 hover:text-green-800'"
                            class="px-4 py-2 rounded-full border border-white/30 font-medium transition">
                            <span x-text="key"></span>
                            <span class="ml-2 text-xs opacity-80">Bs <span x-text="precio"></span></span>
                        </button>
                    </template>
                </div>
            </div>

            {{-- Cantidad y Total --}}
            <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h4 class="text-white font-semibold mb-2 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        Cantidad:
                    </h4>
                    <input type="number" min="1" x-model.number="cantidad"
                           class="w-24 px-3 py-2 rounded-md border border-white/40 bg-white/20 text-white focus:ring-2 focus:ring-yellow-400 outline-none">
                </div>

                <div class="text-white text-lg font-semibold bg-white/20 px-6 py-3 rounded-xl border border-white/30">
                    Total: <span class="text-yellow-300">Bs <span x-text="total"></span></span>
                </div>
            </div>

            {{-- Botones de acción --}}
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <a :href="'https://wa.me/{{ config('app.whatsapp_number') }}?text=Hola!%20Quiero%20hacer%20un%20pedido%20de%20' + encodeURIComponent('{{ $producto['nombre'] }}') + '%20-%20Presentación:%20' + presentacion + '%20Cantidad:%20' + cantidad + '%20Total:%20Bs%20' + total"
                   target="_blank"
                   class="flex items-center justify-center gap-2 bg-yellow-400 hover:bg-yellow-300 text-green-900 font-semibold px-8 py-3 rounded-full shadow-md hover:shadow-lg transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 7L9 19l-5.5-5.5L5.91 12 9 15.09 19.59 4.5z"/>
                    </svg>
                    Realizar Pedido
                </a>

                <a href="{{ route('productos') }}"
                   class="flex items-center justify-center gap-2 bg-white/20 hover:bg-white/40 text-white font-medium px-6 py-3 rounded-full border border-white/30 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Volver a Productos
                </a>
            </div>
        </div>
    </div>
    @else
        <div class="text-center text-white mt-40">
            <p class="text-2xl mb-4">❌ Producto no encontrado</p>
            <a href="{{ route('productos') }}" class="underline text-yellow-300 hover:text-yellow-200">Volver a productos</a>
        </div>
    @endif
</section>
