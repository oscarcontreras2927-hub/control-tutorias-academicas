@extends('layouts.app')

@section('title', 'Información Académica')

@section('content')

    <div class="text-center mb-4">
        <h2>Información Académica</h2>
        <p class="text-secondary">
            Consulta los datos escolares del estudiante.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <div class="card p-4">

                <h3>Datos del estudiante</h3>

                <p><strong>Nombre:</strong> Por definir</p>
                <p><strong>Grado y grupo:</strong> Por definir</p>
                <p><strong>Promedio:</strong> 9.0</p>

                <hr>

                <h3>Información de tutoría</h3>

                <p><strong>Tutor asignado:</strong> Por definir</p>
                <p><strong>Estado:</strong> En seguimiento</p>

                <a href="/seguimiento" class="btn btn-primary mt-2">
                    Ver seguimiento académico
                </a>

                <a href="/detalle" class="btn btn-secondary mt-2">
                    Ver historial de tutorías
                </a>

            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/estudiantes" class="btn btn-secondary">
            Volver a estudiantes
        </a>
    </div>

@endsection