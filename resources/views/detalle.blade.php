@extends('layouts.app')

@section('title', 'Detalle de Tutoría')

@section('content')

    <div class="text-center mb-4">
        <h2>Detalle de Tutoría</h2>
        <p class="text-secondary">
            Consulta la información de la tutoría académica.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <div class="card p-4">

                <h3>Datos de la tutoría</h3>

                <p><strong>Estudiante:</strong> Por definir</p>
                <p><strong>Tutor asignado:</strong> Por definir</p>
                <p><strong>Fecha y hora:</strong> Por definir</p>
                <p><strong>Estado:</strong> Programada</p>

                <hr>

                <h3>Comentarios</h3>

                <p>
                    No hay comentarios registrados para esta tutoría.
                </p>

                <div class="d-grid gap-2 d-md-flex mt-3">
                    <a href="/programar" class="btn btn-primary">
                        Editar tutoría
                    </a>

                    <a href="/pendientes" class="btn btn-secondary">
                        Volver a pendientes
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection