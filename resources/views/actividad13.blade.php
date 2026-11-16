<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 13 - Filtro por Categorías</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Filtrado de Artículos - Tutorías</h1>

        <!-- Menú de categorías con id único y atributo data- -->
        <div class="flex justify-center gap-3 mb-6">
            <button id="btnTodos" data-categoria="todos" class="px-4 py-2 bg-blue-600 text-white rounded font-semibold">Todos</button>
            <button id="btnMatematicas" data-categoria="matematicas" class="px-4 py-2 bg-gray-200 text-gray-800 rounded font-semibold">Matemáticas</button>
            <button id="btnProgramacion" data-categoria="programacion" class="px-4 py-2 bg-gray-200 text-gray-800 rounded font-semibold">Programación</button>
        </div>

        <!-- Contenedor de artículos con clases basadas en las categorías -->
        <div class="space-y-4">
            
            <div class="articulo matematicas p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">Asesoría de Cálculo Diferencial</h3>
                <p class="text-gray-600">Resolución de límites, derivadas y problemas de optimización.</p>
            </div>

            <div class="articulo programacion p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">Introducción a Laravel y Vistas</h3>
                <p class="text-gray-600">Creación de rutas, controladores y estructuración de plantillas Blade.</p>
            </div>

            <div class="articulo matematicas p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">Álgebra Lineal y Matrices</h3>
                <p class="text-gray-600">Operaciones con matrices, determinantes y sistemas de ecuaciones.</p>
            </div>

            <div class="articulo programacion p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">JavaScript Básico y Eventos</h3>
                <p class="text-gray-600">Manipulación del DOM mediante getElementById y addEventListener.</p>
            </div>

        </div>
    </div>

    <!-- Lógica en JavaScript simple y básica requerida -->
    <script>
        // 1. Enlace a componentes mediante getElementById
        let btnTodos = document.getElementById("btnTodos");
        let btnMatematicas = document.getElementById("btnMatematicas");
        let btnProgramacion = document.getElementById("btnProgramacion");

        // 2. Función explícita para filtrar y manipular clases con add y remove
        function filtrarArticulos(categoriaSeleccionada) {
            // Enlace a divisiones mediante getElementsByClassName
            let listaArticulos = document.getElementsByClassName("articulo");

            // Recorremos las divisiones de forma básica con un ciclo for
            for (let i = 0; i < listaArticulos.length; i++) {
                let articuloActual = listaArticulos[i];

                if (categoriaSeleccionada === "todos") {
                    articuloActual.classList.remove("hidden");
                } else {
                    // Verificamos si la división contiene la clase de la categoría buscada
                    if (articuloActual.classList.contains(categoriaSeleccionada)) {
                        articuloActual.classList.remove("hidden");
                    } else {
                        articuloActual.classList.add("hidden");
                    }
                }
            }
        }

        // 3. Agregar eventos mediante addEventListener y lectura del atributo data-
        btnTodos.addEventListener("click", function() {
            let cat = btnTodos.getAttribute("data-categoria");
            filtrarArticulos(cat);
        });

        btnMatematicas.addEventListener("click", function() {
            let cat = btnMatematicas.getAttribute("data-categoria");
            filtrarArticulos(cat);
        });

        btnProgramacion.addEventListener("click", function() {
            let cat = btnProgramacion.getAttribute("data-categoria");
            filtrarArticulos(cat);
        });
    </script>

</body>
</html>