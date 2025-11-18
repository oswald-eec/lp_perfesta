<?php

namespace App\Livewire;

use Livewire\Component;

class InicioPage extends Component
{
    public $categorias = [];
    public $testimonios = [];
    public $whatsapp = '59172792260';

    public function mount()
    {
        // Definimos las categorías
        $this->categorias = [
            [
                'img' => 'cocteles.jpg',
                'titulo' => 'Cócteles',
                'desc' => 'Sabores artesanales que elevan cada momento.',
                'ruta' => route('productos'),
                'color' => 'from-green-500 to-green-700'
            ],
            [
                'img' => 'servicios.jpg',
                'titulo' => 'Servicios',
                'desc' => 'Atención personalizada para tus eventos.',
                'ruta' => route('servicios'),
                'color' => 'from-yellow-500 to-orange-500'
            ],
            [
                'img' => 'ofertas.jpg',
                'titulo' => 'Ofertas',
                'desc' => 'Promociones exclusivas para fechas especiales.',
                'ruta' => route('ofertas'),
                'color' => 'from-pink-500 to-red-500'
            ],
        ];

        // Definimos los testimonios
        $this->testimonios = [
            [
                'texto' => 'Los cócteles de Perfesta son increíbles, perfectos para mis fiestas en casa.',
                'nombre' => 'María González',
            ],
            [
                'texto' => 'Calidad premium y sabor auténtico. ¡Los recomiendo 100%!',
                'nombre' => 'Carlos Rodríguez',
            ],
            [
                'texto' => 'El six pack es perfecto para reuniones familiares. Excelente relación calidad-precio.',
                'nombre' => 'Ana López',
            ],
        ];
    }
    
    public function render()
    {
        return view('livewire.inicio-page');
    }
}
