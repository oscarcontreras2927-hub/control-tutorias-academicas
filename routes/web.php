<?php

use Illuminate\Support\Facades\Route;

// 1. Inicio / Presentación
Route::get('/', function () {
    return view('Presentacion');
});

// 2. Información General
Route::get('/informacion', function () {
    return view('informacion');
});

// 3. Primer Ingreso
Route::get('/primer-ingreso', function () {
    return view('primer-ingreso');
});

// 4. Antecedentes
Route::get('/antecedentes', function () {
    return view('antecedentes');
});

// 5. Egreso
Route::get('/egreso', function () {
    return view('egreso');
});

// 6. Modalidades
Route::get('/modalidades', function () {
    return view('modalidades');
});

// 7. Pares
Route::get('/pares', function () {
    return view('pares');
});

// 8. Recursos
Route::get('/recursos', function () {
    return view('recursos');
});

// 9. Directorio
Route::get('/directorio', function () {
    return view('directorio');
});

// 10. Contacto
Route::get('/contacto', function () {
    return view('contacto');
});