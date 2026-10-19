<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoría para Primer Ingreso | Tutoría Académica</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #2c3e50;
        }

        .hero-banner {
            background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);
            color: #ffffff;
            padding: 35px 0;
            border-bottom: 4px solid #002171;
        }

        .main-nav {
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .main-nav .nav-link {
            color: #455a64;
            font-weight: 500;
            padding: 12px 18px;
            transition: all 0.2s ease;
        }

        .main-nav .nav-link:hover, .main-nav .nav-link.active {
            color: #1976d2;
            border-bottom: 3px solid #1976d2;
        }

        .content-card {
            background: #ffffff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
            padding: 28px;
            margin-bottom: 24px;
        }

        .section-title {
            color: #0d47a1;
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
            overflow: hidden;
            border: none;
        }

        .sidebar-header {
            background-color: #0d47a1;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .sidebar-menu .list-group-item {
            border: none;
            border-bottom: 1px solid #edf2f7;
            padding: 12px 20px;
            color: #37474f;
            font-weight: 500;
            transition: background 0.2s;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-menu .list-group-item:hover {
            background-color: #e3f2fd;
            color: #0d47a1;
        }

        .sidebar-menu .list-group-item.active {
            background-color: #bbdefb;
            color: #0d47a1;
            font-weight: 700;
        }

        .step-box {
            background-color: #f8f9fa;
            border-left: 4px solid #1976d2;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 0 8px 8px 0;
        }
    </style>
</head>
<body>

    <!-- Header Institucional -->
    <header class="hero-banner">
        <div class="container">
            <div class="d-flex align-items-center gap-3">
                <i class="bi bi-mortarboard-fill display-5"></i>
                <div>
                    <h1 class="h2 mb-1 fw-bold">Programa Institucional de Tutoría Académica</h1>
                    <p class="mb-0 opacity-75">Acompañamiento integral y orientación para la trayectoria escolar</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Barra de Navegación Principal -->
    <nav class="navbar navbar-expand-lg main-nav sticky-top mb-4">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/"><i class="bi bi-house-door me-1"></i> Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/informacion">Información General</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/primer-ingreso">Primer Ingreso</a></li>
                    <li class="nav-item"><a class="nav-link" href="/egreso">Tutoría de Egreso</a></li>
                    <li class="nav-item"><a class="nav-link" href="/recursos">Recursos Educativos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cuerpo de la Página (2 Columnas) -->
    <div class="container my-4">
        <div class="row">

            <!-- Columna Izquierda: Tutoría para Primer Ingreso -->
            <div class="col-lg-8">
                
                <div class="content-card">
                    <h2 class="section-title"><i class="bi bi-person-plus-fill"></i> Tutoría para Primer Ingreso</h2>
                    <p class="lead text-muted" style="font-size: 1.05rem;">
                        ¡Bienvenido a la universidad! La transición a la educación superior trae consigo grandes retos académicos y personales. El Programa de Tutoría para Primer Ingreso está diseñado para acompañarte desde tu primer día.
                    </p>
                    <p>
                        Durante tu primer ciclo escolar, contarás con la guía de un tutor académico asignado que te ayudará a adaptarte a la vida universitaria, conocer los reglamentos y aprovechar al máximo los recursos disponibles.
                    </p>
                </div>

                <div class="content-card">
                    <h2 class="section-title"><i class="bi bi-compass-fill"></i> Guía Inicial del Estudiante</h2>
                    
                    <div class="step-box">
                        <h5 class="fw-bold text-primary mb-1">1. Conoce a tu Tutor Asignado</h5>
                        <p class="mb-0">Al inicio del ciclo escolar, se te notificará a través de tu correo institucional quién es tu tutor o tutora asignada y los horarios de atención en cubículo.</p>
                    </div>

                    <div class="step-box">
                        <h5 class="fw-bold text-primary mb-1">2. Asiste a la Sesión de Inducción</h5>
                        <p class="mb-0">Participa en las reuniones grupales de primer ingreso para conocer la estructura del plan de estudios, el calendario de exámenes y las plataformas virtuales.</p>
                    </div>

                    <div class="step-box">
                        <h5 class="fw-bold text-primary mb-1">3. Identifica Servicios de Apoyo</h5>
                        <p class="mb-0">Ubica la biblioteca del campus, las salas de cómputo, las oficinas de control escolar y los programas de asesorías académicas entre pares.</p>
                    </div>
                </div>

                <div class="content-card">
                    <h2 class="section-title"><i class="bi bi-lightbulb-fill"></i> Consejos para tu Primer Semestre</h2>
                    <ul>
                        <li class="mb-2">Organiza tus horarios de estudio y entregas desde la primera semana.</li>
                        <li class="mb-2">Acércate a tu tutor en caso de tener dudas sobre reglamentos o bajas de materias.</li>
                        <li class="mb-2">Consulta los Recursos Educativos Abiertos para reforzar materias de alta complejidad.</li>
                    </ul>
                </div>

            </div>

            <!-- Columna Derecha: Menú Lateral -->
            <div class="col-lg-4">
                <div class="sidebar-card">
                    <div class="sidebar-header">
                        <i class="bi bi-list-nested me-2"></i> Menú de Secciones
                    </div>
                    <div class="list-group sidebar-menu">
                        <a href="/" class="list-group-item">
                            <span>Presentación</span> <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="/informacion" class="list-group-item">
                            <span>Información General</span> <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="/primer-ingreso" class="list-group-item active">
                            <span>Tutoría para Primer Ingreso</span> <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="/antecedentes" class="list-group-item">
                            <span>Antecedentes</span> <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="/egreso" class="list-group-item">
                            <span>Tutoría de Egreso</span> <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="/modalidades" class="list-group-item">
                            <span>Modalidades de Tutoría</span> <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="/pares" class="list-group-item">
                            <span>Asesoría entre Pares</span> <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="/recursos" class="list-group-item">
                            <span>Recursos Educativos Abiertos</span> <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="/directorio" class="list-group-item">
                            <span>Directorio de Tutores</span> <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="/contacto" class="list-group-item">
                            <span>Contacto y Preguntas Frecuentes</span> <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Pie de Página -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-1">Universidad de Guadalajara — Centro Universitario</p>
            <small class="text-muted">Programa Institucional de Tutorías Académicas &copy; 2026</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>