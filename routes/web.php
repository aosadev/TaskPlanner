<?php

use Illuminate\Support\Facades\Route;

// Define las rutas de recursos para los proyectos y las tareas.
// Esto creará automáticamente todas las rutas necesarias para operaciones CRUD.
Route::resource('proyectos', ProyectoController::class);
Route::resource('tareas', TareaController::class);

// Define la ruta principal ("/") de tu aplicación.
// Cuando los usuarios accedan a la raíz de tu aplicación, verán la página de bienvenida.
Route::get('/', function () {
    return view('welcome');
});
