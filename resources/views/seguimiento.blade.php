@extends('layouts.app')

@section('title', 'Seguimiento Académico')

@section('content')

    <div class="text-center mb-4">
        <h2>Seguimiento académico</h2>
        <p class="text-secondary">
            Consulta el progreso del estudiante.
        </p>
    </div>

    <section class="card p-4">

        <h3>Estudiante</h3>
        <p>Nombre del estudiante</p>

        <hr>

        <h3>Tutorías realizadas</h3>
        <p><strong>Cantidad de tutorías:</strong> 5</p>

        <hr>

        <h3>Avance académico</h3>
        <p><strong>Progreso:</strong> En seguimiento</p>

        <hr>

        <h3>Observaciones</h3>
        <p>Comentarios del tutor</p>

        <div class="text-center mt-3">
            <a href="/detalle" class="btn btn-primary">
                Ver detalles
            </a>
        </div>

    </section>

@endsection