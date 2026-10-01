@extends('layouts.app')

@section('title', 'Información del estudiante')

@section('content')

    <div class="text-center mb-4">
        <h2>Información del estudiante</h2>
    </div>

    <section class="card p-4">

        <h3>Nombre del estudiante</h3>
        <p>Nombre del estudiante</p>

        <hr>

        <h3>Datos académicos</h3>

        <p><strong>Tutor asignado:</strong> Nombre del tutor</p>

        <h4>Rendimiento académico</h4>

        <p><strong>Nombre:</strong> Nombre del estudiante</p>
        <p><strong>Promedio:</strong> 9.0</p>

        <div class="text-center mt-3">
            <button class="btn btn-primary">
                Ver Historial
            </button>
        </div>

    </section>

@endsection