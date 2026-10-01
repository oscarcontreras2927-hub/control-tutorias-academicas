@extends('layouts.app')

@section('title', 'Tutorías')

@section('content')

    <div class="text-center mb-4">
        <h2>Tutorías</h2>
        <p class="text-secondary">
            Consulta de tutorías, horarios y tutores disponibles.
        </p>
    </div>

    <section class="row">

        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h3>Horarios</h3>

                <p>Consulta los horarios disponibles para las tutorías.</p>

                <button class="btn btn-primary">
                    Consultar horarios
                </button>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h3>Tutorías disponibles</h3>

                <p>Consulta las tutorías que se encuentran disponibles.</p>

                <button class="btn btn-primary">
                    Ver tutorías
                </button>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h3>Mis tutorías</h3>

                <p>Consulta las tutorías que tienes programadas.</p>

                <button class="btn btn-primary">
                    Ver mis tutorías
                </button>
            </div>
        </div>

    </section>

    <section class="row mt-3">

        <div class="col-md-6 mb-4">
            <div class="card p-3">
                <h3>Solicitar tutorías</h3>

                <p>Solicita una nueva tutoría académica.</p>

                <a href="/programar" class="btn btn-primary">
                    Programar una nueva tutoría
                </a>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card p-3">
                <h3>Tutorías pendientes</h3>

                <p>Consulta las tutorías que todavía están pendientes.</p>

                <a href="/pendientes" class="btn btn-primary">
                    Consultar pendientes
                </a>
            </div>
        </div>

    </section>

@endsection