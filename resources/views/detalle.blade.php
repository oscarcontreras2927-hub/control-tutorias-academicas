@extends('layouts.app')

@section('title', 'Detalle de tutoría')

@section('content')

    <div class="text-center mb-4">
        <h2>Detalle de tutoría</h2>
    </div>

    <section class="card p-4">

        <h3>Estudiante</h3>
        <p>Nombre del estudiante</p>

        <hr>

        <h3>Tutor</h3>
        <p>Nombre del tutor</p>

        <hr>

        <h3>Fecha y Hora</h3>

        <p><strong>Fecha:</strong> Por definir</p>
        <p><strong>Hora:</strong> Por definir</p>

        <hr>

        <h3>Información de la tutoría</h3>

        <h4>Estado de la tutoría</h4>
        <p><strong>Estado:</strong> Programada</p>

        <h4>Comentarios de la tutoría</h4>
        <p>Observaciones</p>

        <div class="text-center mt-3">

            <button class="btn btn-primary me-2">
                Editar tutoría
            </button>

            <button class="btn btn-secondary">
                Cancelar Tutoría
            </button>

        </div>

    </section>

@endsection