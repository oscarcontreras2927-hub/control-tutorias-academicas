@extends('layouts.app')

@section('title', 'Seguimiento Académico')

@section('content')

    <div class="text-center mb-4">
        <h2>Seguimiento Académico</h2>
        <p class="text-secondary">
            Consulta el progreso de las tutorías del estudiante.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <div class="card p-4">

                <h3>Información del estudiante</h3>

                <p><strong>Nombre:</strong> Por definir</p>
                <p><strong>Tutorías realizadas:</strong> 5</p>
                <p><strong>Estado:</strong> En seguimiento</p>

                <hr>

                <h3>Progreso académico</h3>

                <p>
                    El estudiante se encuentra en seguimiento académico.
                    Se recomienda continuar con las sesiones de tutoría.
                </p>

                <h3>Observaciones</h3>

                <p>
                    No hay observaciones adicionales registradas.
                </p>

                <a href="/detalle" class="btn btn-primary mt-2">
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