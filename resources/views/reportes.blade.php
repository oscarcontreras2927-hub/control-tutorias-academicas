@extends('layouts.app')

@section('title', 'Reportes')

@section('content')

    <div class="text-center mb-4">
        <h2>Reportes</h2>
        <p class="text-secondary">
            Consulta y generación de reportes de tutorías.
        </p>
    </div>

    <section class="row">

        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h3>Reporte de Tutorías</h3>

                <p>Consultar tutorías realizadas.</p>

                <button class="btn btn-primary">
                    Consultar tutorías
                </button>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h3>Seguimiento Académico</h3>

                <p>Consultar progreso del estudiante.</p>

                <button class="btn btn-primary">
                    Consultar progreso
                </button>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h3>Generar reporte</h3>

                <p>Consulta de reportes.</p>

                <button class="btn btn-primary">
                    Generar reporte
                </button>
            </div>
        </div>

    </section>

@endsection