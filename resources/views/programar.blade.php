@extends('layouts.app')

@section('title', 'Programar tutoría')

@section('content')

    <div class="text-center mb-4">
        <h2>Programar tutoría</h2>
        <p class="text-secondary">
            Completa los datos para solicitar una tutoría académica.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

            <div class="card p-4">

                <form>

                    <div class="mb-3">
                        <label for="estudiante" class="form-label">
                            Estudiante
                        </label>

                        <select id="estudiante" class="form-select" required>
                            <option value="">Selecciona un estudiante</option>
                            <option>Estudiante 1</option>
                            <option>Estudiante 2</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tutor" class="form-label">
                            Tutor
                        </label>

                        <select id="tutor" class="form-select" required>
                            <option value="">Selecciona un tutor</option>
                            <option>Tutor 1</option>
                            <option>Tutor 2</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">
                            Fecha y hora
                        </label>

                        <input type="datetime-local"
                            id="fecha"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="motivo" class="form-label">
                            Motivo de la tutoría
                        </label>

                        <textarea id="motivo"
                            class="form-control"
                            rows="3"
                            placeholder="Escribe el motivo de la tutoría"></textarea>
                    </div>

                    <button type="button" class="btn btn-primary w-100"
                        onclick="alert('Formulario de demostración. No se guardaron datos.')">
                        Programar tutoría
                    </button>

                </form>

            </div>
        </div>
    </div>

@endsection