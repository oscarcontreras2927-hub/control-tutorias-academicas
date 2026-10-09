@extends('layouts.app')

@section('title', 'Tutorías pendientes')

@section('content')

    <div class="text-center mb-4">
        <h2>Tutorías pendientes</h2>
        <p class="text-secondary">
            Consulta las tutorías que necesitan atención.
        </p>
    </div>

    <section class="row g-3">

        <div class="col-12 col-md-6">
            <div class="card h-100 p-3">
                <h3>Tutoría 1</h3>

                <p><strong>Estudiante:</strong> Por definir</p>
                <p><strong>Fecha:</strong> Por definir</p>
                <p><strong>Estado:</strong> Pendiente</p>

                <a href="/detalle" class="btn btn-primary mt-2">
                    Ver detalle
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card h-100 p-3">
                <h3>Tutoría 2</h3>

                <p><strong>Estudiante:</strong> Por definir</p>
                <p><strong>Fecha:</strong> Por definir</p>
                <p><strong>Estado:</strong> Pendiente</p>

                <a href="/detalle" class="btn btn-primary mt-2">
                    Ver detalle
                </a>
            </div>
        </div>

    </section>

    <div class="text-center mt-4">
        <a href="/tutorias" class="btn btn-secondary">
            Volver a tutorías
        </a>
    </div>

@endsection