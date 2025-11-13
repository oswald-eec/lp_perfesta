<?php

use App\Livewire\InicioPage;
use App\Livewire\LandingPage;
use App\Livewire\OfertasSection;
use App\Livewire\ProductoDetalle;
use App\Livewire\ProductosSection;
use App\Livewire\QuienesSomos;
use App\Livewire\ServiciosSection;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class)->name('landing');
Route::get('/productos', ProductosSection::class)->name('productos');
Route::get('/servicios', ServiciosSection::class)->name('servicios');
Route::get('/ofertas', OfertasSection::class)->name('ofertas');

Route::get('/producto/{slug}', ProductoDetalle::class)->name('producto.detalle');

Route::get('/inicio', InicioPage::class)->name('inicio');
Route::get('/quienes-somos', QuienesSomos::class)->name('quienes-somos');

