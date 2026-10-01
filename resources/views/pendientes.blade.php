@extends('layouts.app')

@section('title', 'Tutorías Pendientes')

@section('content')

    <div class="text-center mb-4">
        <h2>Tutorías Pendientes</h2>
        <p class="text-secondary">
            Consulta tutorías pendientes.
        </p>
    </div>

    <section class="row">

        <div class="col-md-6 mb-4">
            <div class="card p-3">
                <h3>Tutoría 1</h3>

                <p><strong>Estudiante:</strong> Nombre del estudiante</p>
                <p><strong>Fecha y hora:</strong> Por definir</p>
                <p><strong>Estado:</strong> Pendiente</p>

                <a href="/detalle" class="btn btn-primary">
                    Ver detalles
                </a>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card p-3">
                <h3>Tutoría 2</h3>

                <p><strong>Estudiante:</strong> Nombre del estudiante</p>
                <p><strong>Fecha y hora:</strong> Por definir</p>
                <p><strong>Estado:</strong> Pendiente</p>

                <a href="/detalle" class="btn btn-primary">
                    Ver detalles
                </a>
            </div>
        </div>

    </section>

@endsection