@extends('layouts.app')

@section('title', 'Reportes')

@section('content')

    <div class="text-center mb-4">
        <h2>Reportes</h2>
        <p class="text-secondary">
            Consulta la información y el seguimiento de las tutorías académicas.
        </p>
    </div>

    <section class="row g-3">

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Reporte de tutorías</h3>

                <p>
                    Consulta la información de las tutorías programadas y pendientes.
                </p>

                <a href="/pendientes" class="btn btn-primary mt-2">
                    Consultar tutorías
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Seguimiento académico</h3>

                <p>
                    Revisa el progreso y las observaciones de los estudiantes.
                </p>

                <a href="/seguimiento" class="btn btn-primary mt-2">
                    Consultar progreso
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Generar reporte</h3>

                <p>
                    Accede a la información disponible para revisar las tutorías.
                </p>

                <a href="/detalle" class="btn btn-primary mt-2">
                    Generar reporte
                </a>
            </div>
        </div>

    </section>

@endsection