<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactoForm extends Component
{
    public $nombre = '';
    public $telefono = '';
    public $email = '';
    public $mensaje = '';

    public $successMessage = '';

    protected $rules = [
        'nombre' => 'required|string|min:3',
        'telefono' => 'required|string|min:7',
        'email' => 'required|email',
        'mensaje' => 'required|string|min:5',
    ];

    public function enviar()
    {
        $this->validate();

        // Simulación de envío (integrar correo después)
        sleep(1); // solo para simular retardo

        // Enviar correo
        // Mail::raw("Nombre: {$this->nombre}\nTeléfono: {$this->telefono}\nEmail: {$this->email}\nMensaje: {$this->mensaje}", function ($message) {
        //     $message->to('info@perfesta.bo')
        //             ->subject('Nuevo contacto desde la web Perfesta');
        // });

        // Reiniciar formulario
        $this->reset(['nombre', 'telefono', 'email', 'mensaje']);

        // Mensaje de éxito
        $this->successMessage = "¡Gracias! Tu solicitud ha sido enviada correctamente.";
    }

    public function render()
    {
        return view('livewire.contacto-form');
    }
}
