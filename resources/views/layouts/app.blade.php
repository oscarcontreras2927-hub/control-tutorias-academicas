<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Control de Tutorías Académicas')</title>

    @vite(['resources/js/app.js'])
</head>

<body>

    <header class="bg-primary text-white p-3">
        <div class="container">

            <h1 class="text-center">
                Control de Tutorías Académicas
            </h1>

            <nav class="navbar navbar-expand-lg">
             <div class="container justify-content-center flex-wrap gap-2">

                    <a class="nav-link text-white" href="/">
                        Inicio
                    </a>

                    <a class="nav-link text-white" href="/tutorias">
                        Tutorías
                    </a>

                    <a class="nav-link text-white" href="/estudiantes">
                        Estudiantes
                    </a>

                    <a class="nav-link text-white" href="/tutores">
                        Tutores
                    </a>

                    <a class="nav-link text-white" href="/reportes">
                        Reportes
                    </a>

                </div>
            </nav>

        </div>
    </header>


    <main class="container p-4">

        @yield('content')

    </main>


    <footer class="bg-primary text-white text-center p-3">

        <p class="mb-0">
            Contacto / Ayuda
        </p>

    </footer>

</body>
</html>