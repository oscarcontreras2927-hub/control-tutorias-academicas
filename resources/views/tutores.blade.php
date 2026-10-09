@extends('layouts.app')

@section('title', 'Tutores')

@section('content')

    <div class="text-center mb-4">
        <h2>Tutores</h2>
        <p class="text-secondary">
            Consulta la disponibilidad y la información de los tutores.
        </p>
    </div>

    <section class="row g-3">

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Lista de tutores</h3>

                <p>
                    Consulta la información de los tutores académicos.
                </p>

                <a href="/informacion" class="btn btn-primary mt-2">
                    Consultar tutores
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Disponibilidad</h3>

                <p>
                    Revisa los horarios para programar una tutoría.
                </p>

                <a href="/programar" class="btn btn-primary mt-2">
                    Consultar horarios
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Asignar tutor</h3>

                <p>
                    Accede al formulario para seleccionar un tutor.
                </p>

                <a href="/programar" class="btn btn-primary mt-2">
                    Asignar tutor
                </a>
            </div>
        </div>

    </section>

@endsection