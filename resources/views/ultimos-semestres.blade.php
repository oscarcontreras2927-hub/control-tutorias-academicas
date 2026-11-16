<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoría para Últimos Semestres | Tutoría Académica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #2c3e50;
        }
        .hero-banner {
            background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);
            color: white;
            padding: 2.5rem 0;
        }
        .nav-top {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
        }
        .nav-top .nav-link {
            color: #495057;
            font-weight: 500;
            padding: 1rem 1.2rem;
            border-bottom: 3px solid transparent;
        }
        .nav-top .nav-link.active {
            color: #0d47a1;
            border-bottom: 3px solid #0d47a1;
        }
        .card-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
        }
        .step-box {
            border-left: 4px solid #0d47a1;
            background-color: #f8f9fa;
            padding: 1.2rem;
            border-radius: 0 8px 8px 0;
            margin-bottom: 1rem;
        }
        .sidebar-header {
            background-color: #0d47a1;
            color: white;
            padding: 1rem 1.25rem;
            border-radius: 12px 12px 0 0;
            font-weight: 600;
        }
        .list-group-item.active-section {
            background-color: #d6eaf8;
            color: #0d47a1;
            font-weight: 600;
            border-color: #dee2e6;
        }
    </style>
</head>
<body>

    <!-- Banner Superior -->
    <header class="hero-banner">
        <div class="container">
            <h1 class="h3 fw-bold mb-1">Programa Institucional de Tutorías</h1>
            <p class="mb-0 opacity-75">Acompañamiento integral y orientación para la trayectoria escolar</p>
        </div>
    </header>

    <!-- Navegación Horizontal -->
    <nav class="nav-top mb-4 shadow-sm">
        <div class="container">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="/"><i class="bi bi-house-door"></i> Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="/informacion">Información General</a></li>
                <li class="nav-item"><a class="nav-link" href="/primer-ingreso">Primer Ingreso</a></li>
                <li class="nav-item"><a class="nav-link" href="/semestres-intermedios">Semestres Intermedios</a></li>
                <li class="nav-item"><a class="nav-link active" href="/ultimos-semestres">Últimos Semestres</a></li>
                <li class="nav-item"><a class="nav-link" href="/egreso">Tutoría de Egreso</a></li>
                <li class="nav-item"><a class="nav-link" href="/recursos">Recursos Educativos</a></li>
            </ul>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="container mb-5">
        <div class="row g-4">
            <!-- Columna Izquierda -->
            <div class="col-lg-8">
                <div class="card card-custom p-4 mb-4">
                    <h2 class="h4 fw-bold text-primary mb-3">
                        <i class="bi bi-mortarboard-fill me-2"></i>Tutoría para Últimos Semestres (7° Semestre en adelante)
                    </h2>
                    <p class="text-muted">
                        Al acercarte a la recta final de tu carrera, la tutoría se enfoca en asegurar que cumplas con todos los requisitos académicos y administrativos para concluir tus estudios en tiempo y forma.
                    </p>
                    <p class="text-muted mb-0">
                        Tu tutor te acompañará en la vinculación con el sector productivo, el desarrollo de tu proyecto terminal y la elección de la modalidad de titulación más adecuada para tu perfil.
                    </p>
                </div>

                <div class="card card-custom p-4">
                    <h3 class="h5 fw-bold text-primary mb-3">
                        <i class="bi bi-briefcase me-2"></i>Ruta de Cierre de Carrera
                    </h3>

                    <div class="step-box">
                        <h4 class="h6 fw-bold text-primary">1. Prácticas Profesionales y Residencias</h4>
                        <p class="mb-0 text-muted small">
                            Asesoría para postularte en empresas o instituciones con convenio, validación de proyectos y seguimiento durante tu estancia profesional.
                        </p>
                    </div>

                    <div class="step-box">
                        <h4 class="h6 fw-bold text-primary">2. Auditoría de Kardex y Créditos</h4>
                        <p class="mb-0 text-muted small">
                            Verificación junto con tu tutor de materias optativas, idioma extranjero, servicio social liberado y actividades complementarias antes del último ciclo.
                        </p>
                    </div>

                    <div class="step-box mb-0">
                        <h4 class="h6 fw-bold text-primary">3. Modalidades de Titulación y Transición Laboral</h4>
                        <p class="mb-0 text-muted small">
                            Información sobre tesis, proyecto de investigación, examen general de conocimientos (EGEL) o titulación por promedio, además de talleres de inserción laboral.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Menú de Secciones -->
            <div class="col-lg-4">
                <div class="card card-custom">
                    <div class="sidebar-header">
                        <i class="bi bi-list me-2"></i>Menú de Secciones
                    </div>
                    <div class="list-group list-group-flush rounded-bottom">
                        <a href="/presentacion" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            Presentación <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                        <a href="/informacion" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            Información General <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                        <a href="/primer-ingreso" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            Tutoría para Primer Ingreso <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                        <a href="/semestres-intermedios" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            Semestres Intermedios <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                        <a href="/ultimos-semestres" class="list-group-item list-group-item-action active-section d-flex justify-content-between align-items-center py-3">
                            Últimos Semestres <i class="bi bi-chevron-right small"></i>
                        </a>
                        <a href="/antecedentes" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            Antecedentes <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                        <a href="/egreso" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            Tutoría de Egreso <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                        <a href="/modalidades" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            Modalidades de Tutoría <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                        <a href="/pares" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            Asesoría entre Pares <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                        <a href="/recursos" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            Recursos Educativos Abiertos <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>