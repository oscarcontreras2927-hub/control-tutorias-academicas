<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tutorias', function () {
    return view('tutorias');
});
Route::get('/estudiantes', function () {
    return view('estudiantes');
});
Route::get('/tutores', function () {
    return view('tutores');
});
Route::get('/reportes', function () {
    return view('reportes');
});
Route::get('/programar', function () {
    return view('programar');
});
Route::get('/pendientes', function () {
    return view('pendientes');
});
Route::get('/seguimiento', function () {
    return view('seguimiento');
});
Route::get('/informacion', function () {
    return view('informacion');
});
Route::get('/detalle', function () {
    return view('detalle');
});
