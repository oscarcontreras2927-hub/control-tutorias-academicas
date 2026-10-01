@extends('layouts.app')

@section('title', 'Estudiantes')

@section('content')

    <div class="text-center mb-4">
        <h2>Estudiantes</h2>
        <p class="text-secondary">
            Gestión de estudiantes.
        </p>
    </div>

    <section class="row">

        <div class="col-md-6 mb-4">
            <div class="card h-100 p-3">
                <h3>Lista de estudiantes</h3>

                <p>Consultar estudiantes registrados.</p>

                <button class="btn btn-primary">
                    Buscar estudiante
                </button>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 p-3">
                <h3>Información Académica</h3>

                <p>Consultar información y progreso del estudiante.</p>

                <a href="/informacion" class="btn btn-primary">
                Consultar información
                 </a>
            </div>
        </div>

    </section>

@endsection