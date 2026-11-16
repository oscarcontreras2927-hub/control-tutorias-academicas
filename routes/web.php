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
Route::get('/actividad-13', function () {
    return view('actividad13');
});
Route::get('/actividad-14', function () {
    return view('actividad14');
});
Route::get('/actividad-15', function () {
    return view('actividad15');
});
Route::get('/actividad-16', function () {
    return view('actividad16');
});
Route::get('/actividad-17', function () {
    return view('actividad17');
});
Route::get('/semestres-intermedios', function () {
    return view('semestres-intermedios');
});

Route::get('/ultimos-semestres', function () {
    return view('ultimos-semestres');
});
