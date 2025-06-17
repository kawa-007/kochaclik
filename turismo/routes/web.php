<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActividadController;
use Illuminate\Support\Facades\Route;

// Ruta pública de bienvenida o landing page
Route::get('/', function () {
    return view('welcome'); // Vista pública sin login
});

// Rutas protegidas para usuarios autenticados y verificados
Route::middleware(['auth', 'verified'])->group(function () {

    // Página principal después de login: /home o /dashboard
    // Ambas usan la misma vista 'home' para simplicidad
    Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/home', 'home')->name('home');
    Route::view('/dashboard', 'home')->name('dashboard');
});

    // CRUD completo para actividades turísticas
    Route::resource('actividades', ActividadController::class);

    // Rutas para manejo de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de autenticación (login, registro, etc.)
require __DIR__.'/auth.php';
