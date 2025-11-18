<div class="bg-white rounded-2xl p-10 shadow-lg relative overflow-hidden">

    <h3 class="text-green-800 text-3xl font-bold mb-6 text-center">Haz tu pedido</h3>

    {{-- Mensaje de éxito --}}
    @if($successMessage)
        <div class="bg-green-100 text-green-800 p-4 rounded mb-5 text-center">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit.prevent="enviar" class="space-y-5">

        {{-- NOMBRE --}}
        <div class="relative">
            <input type="text" wire:model="nombre" placeholder=" "
                class="peer w-full rounded-xl border border-green-300 px-4 pt-5 pb-2 text-green-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400 transition">
            <label class="absolute left-4 top-2 text-green-500 text-sm peer-placeholder-shown:top-5 peer-placeholder-shown:text-green-300 peer-placeholder-shown:text-base transition-all">
                Nombre completo
            </label>
            @error('nombre') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        {{-- TELÉFONO --}}
        <div class="relative">
            <input type="text" wire:model="telefono" placeholder=" "
                class="peer w-full rounded-xl border border-green-300 px-4 pt-5 pb-2 text-green-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400 transition">
            <label class="absolute left-4 top-2 text-green-500 text-sm peer-placeholder-shown:top-5 peer-placeholder-shown:text-green-300 peer-placeholder-shown:text-base transition-all">
                Teléfono
            </label>
            @error('telefono') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        {{-- EMAIL --}}
        <div class="relative">
            <input type="email" wire:model="email" placeholder=" "
                class="peer w-full rounded-xl border border-green-300 px-4 pt-5 pb-2 text-green-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400 transition">
            <label class="absolute left-4 top-2 text-green-500 text-sm peer-placeholder-shown:top-5 peer-placeholder-shown:text-green-300 peer-placeholder-shown:text-base transition-all">
                Correo electrónico
            </label>
            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        {{-- MENSAJE --}}
        <div class="relative">
            <textarea rows="4" wire:model="mensaje" placeholder=" "
                class="peer w-full rounded-xl border border-green-300 px-4 pt-5 pb-2 text-green-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400 transition"></textarea>
            <label class="absolute left-4 top-2 text-green-500 text-sm peer-placeholder-shown:top-5 peer-placeholder-shown:text-green-300 peer-placeholder-shown:text-base transition-all">
                ¿Qué cócteles te interesan?
            </label>
            @error('mensaje') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        {{-- BOTÓN --}}
        <button type="submit"
            wire:loading.attr="disabled"
            wire:target="enviar"
            :disabled="!{{ $nombre && $telefono && $email && $mensaje }}"
            class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-3 disabled:opacity-50 disabled:cursor-not-allowed">
            <span wire:loading.remove wire:target="enviar">Enviar solicitud</span>
            <span wire:loading wire:target="enviar">
                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 00-8 8h4l-3 3 3 3h-4z"></path>
                </svg>
            </span>
        </button>
    </form>

    {{-- Fondo decorativo --}}
    <div class="absolute top-0 right-0 w-40 h-40 bg-yellow-300/30 rounded-full blur-3xl -translate-x-10 -translate-y-10"></div>
    <div class="absolute bottom-0 left-0 w-40 h-40 bg-green-400/30 rounded-full blur-3xl translate-x-10 translate-y-10"></div>
</div>
