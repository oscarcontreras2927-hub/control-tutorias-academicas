@extends('layouts.app')

@section('title', 'Programar Tutoría')

@section('content')

    <div class="text-center mb-4">
        <h2>Programar Tutoría</h2>
        <p class="text-secondary">
            Registro de nueva tutoría.
        </p>
    </div>

    <section class="card p-4">

        <div class="mb-3">
            <label class="form-label">Estudiante</label>
            <select class="form-control">
                <option>Seleccionar estudiante</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Tutor</label>
            <select class="form-control">
                <option>Seleccionar tutor</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha y Hora</label>
            <input type="datetime-local" class="form-control">
        </div>

        <div class="text-center">
            <button class="btn btn-primary">
                Programar Tutoría
            </button>
        </div>

    </section>

@endsection