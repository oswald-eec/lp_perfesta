<?php

namespace App\Livewire;

use Livewire\Component;

class LandingPage extends Component
{
    public $nombre = '';
    public $email = '';
    public $mensaje = '';

    public $mostrarProductos = false;
    public $seccion = 'inicio';

    protected $listeners = [
        'mostrarProductos' => 'verProductos',
        'mostrarOfertas' => 'verOfertas',
        'volverInicio' => 'mostrarInicio'
    ];


    protected $rules = [
        'nombre' => 'required|min:3',
        'email' => 'required|email',
    ];

    public function suscribir()
    {
        $this->validate();

        // Aquí podrías guardar en base de datos o enviar correo
        $this->mensaje = "🎉 ¡Gracias {$this->nombre}, te has suscrito correctamente!";

        $this->reset(['nombre', 'email']);
    }

    public function verProductos()
    {
        $this->seccion = 'productos';
    }

    public function verOfertas()
    {
        $this->seccion = 'ofertas';
    }

    public function mostrarInicio()
    {
        $this->seccion = 'inicio';
        $this->dispatchBrowserEvent('scrollToHero');
    }

    public function render()
    {
        return view('livewire.landing-page', [
            'mostrarProductos' => $this->mostrarProductos,
        ]);
    }
}
