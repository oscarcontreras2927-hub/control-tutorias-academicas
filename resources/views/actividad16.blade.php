<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad - Catálogo con Eventos de Mouse</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Transición suave para que el efecto de escala y sombra se vea fluido */
        .articulo {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Catálogo de Tutorías con Eventos de Mouse</h1>

        <!-- Buscador de productos por nombre -->
        <div class="mb-6">
            <label for="inputBuscador" class="block font-semibold text-gray-700 mb-2">Buscar producto o servicio por nombre:</label>
            <input type="text" id="inputBuscador" placeholder="Ej. calculo, laravel, cisco..." class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Panel de Filtros con Checkboxes -->
        <div class="mb-6 p-4 bg-gray-50 border border-gray-200 rounded space-y-4">
            <h2 class="font-bold text-gray-700">Filtros por Categoría y Subcategoría:</h2>

            <div>
                <label class="font-semibold text-blue-600 flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" id="checkTodos" class="w-4 h-4" checked> Ver Todos
                </label>
            </div>

            <!-- Matemáticas -->
            <div class="border-t pt-2">
                <span class="font-bold text-gray-700">Matemáticas:</span>
                <div class="flex flex-wrap gap-4 mt-1">
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkCalculo" class="check-subcat w-4 h-4" value="calculo"> Cálculo</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkAlgebra" class="check-subcat w-4 h-4" value="algebra"> Álgebra</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkEstadistica" class="check-subcat w-4 h-4" value="estadistica"> Estadística</label>
                </div>
            </div>

            <!-- Programación -->
            <div class="border-t pt-2">
                <span class="font-bold text-gray-700">Programación:</span>
                <div class="flex flex-wrap gap-4 mt-1">
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkLaravel" class="check-subcat w-4 h-4" value="laravel"> Laravel</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkJavascript" class="check-subcat w-4 h-4" value="javascript"> JavaScript</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkBasesdatos" class="check-subcat w-4 h-4" value="basesdatos"> Bases de Datos</label>
                </div>
            </div>

            <!-- Redes -->
            <div class="border-t pt-2">
                <span class="font-bold text-gray-700">Redes:</span>
                <div class="flex flex-wrap gap-4 mt-1">
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkCisco" class="check-subcat w-4 h-4" value="cisco"> Cisco</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkSubnetting" class="check-subcat w-4 h-4" value="subnetting"> Subnetting</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkSeguridad" class="check-subcat w-4 h-4" value="seguridad"> Seguridad</label>
                </div>
            </div>
        </div>

        <!-- Contenedor de Artículos -->
        <div class="space-y-4">
            
            <div class="articulo calculo p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Asesoría de Cálculo Diferencial</h3>
                <p class="text-gray-600">Límites, derivadas y problemas de optimización matemática.</p>
            </div>

            <div class="articulo laravel p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Desarrollo Web con Laravel</h3>
                <p class="text-gray-600">Creación de rutas, controladores, vistas Blade y migraciones.</p>
            </div>

            <div class="articulo cisco p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Configuración de Routers Cisco</h3>
                <p class="text-gray-600">Topologías de red, protocolos de enrutamiento y comandos CCNA.</p>
            </div>

            <div class="articulo algebra p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Álgebra Lineal Avanzada</h3>
                <p class="text-gray-600">Matrices, determinantes y espacios vectoriales.</p>
            </div>

            <div class="articulo javascript p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Fundamentos de JavaScript</h3>
                <p class="text-gray-600">Manipulación del DOM, eventos y funciones con JS plano.</p>
            </div>

            <div class="articulo subnetting p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Diseño de Redes y Subnetting</h3>
                <p class="text-gray-600">Cálculo de máscaras de subred y direccionamiento IPv4/IPv6.</p>
            </div>

        </div>
    </div>

    <!-- Lógica en JavaScript -->
    <script>
        // 1. Enlace a componentes mediante getElementById
        let inputBuscador = document.getElementById("inputBuscador");
        let checkTodos = document.getElementById("checkTodos");

        let checks = [
            document.getElementById("checkCalculo"),
            document.getElementById("checkAlgebra"),
            document.getElementById("checkEstadistica"),
            document.getElementById("checkLaravel"),
            document.getElementById("checkJavascript"),
            document.getElementById("checkBasesdatos"),
            document.getElementById("checkCisco"),
            document.getElementById("checkSubnetting"),
            document.getElementById("checkSeguridad")
        ];

        // 2. Funciones explícitas para la acción del mouseover y mouseout requeridas por la rúbrica
        function resaltarProducto() {
            // Aplicar escala (5% más grande)
            this.style.transform = "scale(1.05)";
            // Cambiar color de borde con clases de Tailwind
            this.classList.remove('border-gray-300');
            this.classList.add('border-red-500');
            // Agregar sombra intensa con Tailwind
            this.classList.add('shadow-2xl');
        }

        function restaurarProducto() {
            // Regresar la escala a la normalidad
            this.style.transform = "scale(1)";
            // Restaurar el borde original
            this.classList.remove('border-red-500');
            this.classList.add('border-gray-300');
            // Eliminar la sombra
            this.classList.remove('shadow-2xl');
        }

        // 3. Función explícita para el filtrado (buscador + checkboxes de las actividades previas)
        function filtrarArticulos() {
            let listaArticulos = document.getElementsByClassName("articulo");
            let textoBusqueda = inputBuscador.value.toLowerCase().trim();

            let algunCheckMarcado = false;
            for (let i = 0; i < checks.length; i++) {
                if (checks[i].checked) {
                    algunCheckMarcado = true;
                    break;
                }
            }

            for (let i = 0; i < listaArticulos.length; i++) {
                let articulo = listaArticulos[i];

                let coincideTexto = true;
                if (textoBusqueda !== "") {
                    coincideTexto = articulo.className.toLowerCase().includes(textoBusqueda);
                }

                let coincideCheckbox = false;
                if (checkTodos.checked || !algunCheckMarcado) {
                    coincideCheckbox = true;
                } else {
                    for (let j = 0; j < checks.length; j++) {
                        if (checks[j].checked) {
                            let subcat = checks[j].value;
                            if (articulo.classList.contains(subcat)) {
                                coincideCheckbox = true;
                                break;
                            }
                        }
                    }
                }

                if (coincideTexto && coincideCheckbox) {
                    articulo.classList.remove("hidden");
                } else {
                    articulo.classList.add("hidden");
                }
            }
        }

        // 4. Asignar los eventos del mouse y de los filtros mediante addEventListener y ClassName
        let listaArticulos = document.getElementsByClassName("articulo");

        for (let i = 0; i < listaArticulos.length; i++) {
            // Eventos del mouse solicitados en la nueva práctica
            listaArticulos[i].addEventListener("mouseover", resaltarProducto);
            listaArticulos[i].addEventListener("mouseout", restaurarProducto);
        }

        // Eventos de búsqueda y filtrado
        inputBuscador.addEventListener("keyup", function() {
            filtrarArticulos();
        });

        checkTodos.addEventListener("click", function() {
            if (checkTodos.checked) {
                for (let i = 0; i < checks.length; i++) {
                    checks[i].checked = false;
                }
            }
            filtrarArticulos();
        });

        for (let i = 0; i < checks.length; i++) {
            checks[i].addEventListener("click", function() {
                if (this.checked) {
                    checkTodos.checked = false;
                }
                filtrarArticulos();
            });
        }
    </script>

</body>
</html>