<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 17 - Catálogo Ampliado con Efectos de Mouse</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Transición suave general para que todos los efectos de movimiento fluyan de manera fluida */
        .articulo {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Catálogo Ampliado de Tutorías - Efectos Interactivos</h1>

        <!-- Buscador de productos por nombre -->
        <div class="mb-6">
            <label for="inputBuscador" class="block font-semibold text-gray-700 mb-2">Buscar producto o servicio por nombre:</label>
            <input type="text" id="inputBuscador" placeholder="Ej. calculo, bases de datos, seguridad..." class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Panel de Filtros con Checkboxes -->
        <div class="mb-6 p-4 bg-gray-50 border border-gray-200 rounded-lg space-y-4">
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

        <!-- Contenedor Ampliado de Artículos -->
        <div class="space-y-4">
            
            <div class="articulo calculo p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Asesoría de Cálculo Diferencial</h3>
                <p class="text-gray-600">Límites, derivadas y problemas de optimización matemática avanzada.</p>
            </div>

            <div class="articulo laravel p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Desarrollo Web Full-Stack con Laravel</h3>
                <p class="text-gray-600">Creación de rutas, controladores, migraciones y pasarelas de pago.</p>
            </div>

            <div class="articulo estadistica p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Probabilidad y Estadística Aplicada</h3>
                <p class="text-gray-600">Distribuciones de probabilidad, pruebas de hipótesis y regresión lineal.</p>
            </div>

            <div class="articulo cisco p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Configuración de Routers y Switches Cisco</h3>
                <p class="text-gray-600">Topologías de red, VLANs, protocolos de enrutamiento OSPF y CCNA.</p>
            </div>

            <div class="articulo basesdatos p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Diseño y Gestión de Bases de Datos SQL</h3>
                <p class="text-gray-600">Normalización, consultas complejas JOIN, procedimientos almacenados y MySQL.</p>
            </div>

            <div class="articulo algebra p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Álgebra Lineal y Matrices</h3>
                <p class="text-gray-600">Operaciones con matrices, determinantes, vectores y transformaciones.</p>
            </div>

            <div class="articulo seguridad p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Fundamentos de Ciberseguridad en Redes</h3>
                <p class="text-gray-600">Cortafuegos (Firewalls), prevención de intrusiones y encriptación de datos.</p>
            </div>

            <div class="articulo javascript p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Programación Avanzada en JavaScript</h3>
                <p class="text-gray-600">Manipulación del DOM, asincronía con Fetch API, promesas y eventos.</p>
            </div>

            <div class="articulo subnetting p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                <h3 class="font-bold text-lg text-gray-800">Diseño de Redes y Subnetting IPv4/IPv6</h3>
                <p class="text-gray-600">Cálculo de máscaras de subred, VLSM y direccionamiento eficiente.</p>
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

        // 2. Funciones explícitas para las acciones de mouseover y mouseout (con múltiples efectos visuales)
        function aplicarEfectosMouseOver() {
            // Efecto 1: Cambiar color de fondo a un tono azul claro y destacar el borde
            this.classList.remove('bg-gray-50', 'border-gray-300');
            this.classList.add('bg-blue-50', 'border-blue-600');

            // Efecto 2: Agregar sombra profunda y rediseñar esquinas
            this.classList.add('shadow-xl', 'rounded-2xl');

            // Efecto 3: Transformación múltiple (crecimiento del 5% y ligera rotación de 1 grado)
            this.style.transform = "scale(1.05) rotate(1deg)";
        }

        function removerEfectosMouseOut() {
            // Restaurar fondo y borde originales
            this.classList.remove('bg-blue-50', 'border-blue-600');
            this.classList.add('bg-gray-50', 'border-gray-300');

            // Quitar sombra y rediseño de esquinas
            this.classList.remove('shadow-xl', 'rounded-2xl');

            // Restaurar escala y rotación a su estado normal
            this.style.transform = "scale(1) rotate(0deg)";
        }

        // 3. Función explícita para el filtrado combinando buscador y checkboxes
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

        // 4. Enlace a divisiones mediante ClassName y asignación de eventos con addEventListener
        let listaArticulos = document.getElementsByClassName("articulo");

        for (let i = 0; i < listaArticulos.length; i++) {
            listaArticulos[i].addEventListener("mouseover", aplicarEfectosMouseOver);
            listaArticulos[i].addEventListener("mouseout", removerEfectosMouseOut);
        }

        // Eventos del buscador y checkboxes
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