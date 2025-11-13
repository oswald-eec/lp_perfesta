<?php

namespace App\Livewire;

use Livewire\Component;

class ProductoDetalle extends Component
{
    public $slug;
    public $producto;

    public function mount($slug)
    {
        // Datos simulados — pueden cargarse desde una base de datos en el futuro
        $productos = [
            'mojito-cubano' => [
                'nombre' => 'Mojito Cubano',
                'descripcion' => 'Refrescante mezcla de ron blanco, jugo de lima, azúcar, menta y soda. Ideal para los días cálidos y las celebraciones alegres.',
                'imagenes' => ['mojito.png', 'mojito2.png', 'mojito3.png'],
                'ingredientes' => 'Ron blanco, azúcar, menta fresca, lima, soda, hielo.',
            ],
            'pina-colada' => [
                'nombre' => 'Piña Colada',
                'descripcion' => 'Una mezcla tropical de crema de coco, jugo de piña y ron añejo. Sabor caribeño irresistible para toda ocasión.',
                'imagenes' => ['pina-colada.png', 'pina-colada2.png', 'pina-colada3.png'],
                'ingredientes' => 'Ron añejo, piña natural, crema de coco, hielo.',
            ],
            'kahlua' => [
                'nombre' => 'Kahlúa',
                'descripcion' => 'Una delicia con sabor a café y licor. El equilibrio perfecto entre lo dulce y lo intenso, ideal para los amantes del café.',
                'imagenes' => ['kahlua.png', 'kahlua2.png', 'kahlua3.png'],
                'ingredientes' => 'Licor de café, vodka, azúcar morena, extracto de vainilla, hielo.',
            ],
            'coctel-radiactivo' => [
                'nombre' => 'Cóctel Radiactivo',
                'descripcion' => 'Explosión de color y energía. Un cóctel vibrante con un toque cítrico y refrescante que encenderá cualquier fiesta.',
                'imagenes' => ['margarita.png', 'radiactivo2.png', 'radiactivo3.png'],
                'ingredientes' => 'Vodka, licor de curaçao azul, jugo de piña, limón, soda y hielo.',
            ],
        ];

        $this->producto = $productos[$slug] ?? null;
        $this->slug = $slug;
    }

    public function render()
    {
        return view('livewire.producto-detalle');
    }
}
