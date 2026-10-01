@extends('layouts.app')

@section('title', 'Tutores')

@section('content')

    <div class="text-center mb-4">
        <h2>Tutores</h2>
        <p class="text-secondary">
            Gestión de tutores.
        </p>
    </div>

    <section class="row">

        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h3>Lista de Tutores</h3>

                <p>Consultar tutores registrados.</p>

                <button class="btn btn-primary">
                    Consultar tutores
                </button>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h3>Disponibilidad</h3>

                <p>Consultar horarios disponibles.</p>

                <button class="btn btn-primary">
                    Consultar horarios
                </button>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h3>Asignar Tutor</h3>

                <p>Asignar un tutor a un estudiante.</p>

                <button class="btn btn-primary">
                    Asignar tutor
                </button>
            </div>
        </div>

    </section>

@endsection