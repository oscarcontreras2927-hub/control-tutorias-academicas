<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 14 - Filtro por Subcategorías con Checkboxes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Filtrado Avanzado de Tutorías</h1>

        <!-- Panel de Filtros con Checkboxes agrupados -->
        <div class="mb-6 p-4 bg-gray-50 border border-gray-200 rounded space-y-4">
            <h2 class="font-bold text-gray-700">Filtros por Categoría y Subcategoría:</h2>

            <!-- Opción Todos -->
            <div>
                <label class="font-semibold text-blue-600 flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" id="checkTodos" class="w-4 h-4" checked> Ver Todos
                </label>
            </div>

            <!-- Categoría 1: Matemáticas -->
            <div class="border-t pt-2">
                <span class="font-bold text-gray-700">Matemáticas:</span>
                <div class="flex flex-wrap gap-4 mt-1">
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkCalculo" class="check-subcat w-4 h-4" value="calculo"> Cálculo</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkAlgebra" class="check-subcat w-4 h-4" value="algebra"> Álgebra</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkEstadistica" class="check-subcat w-4 h-4" value="estadistica"> Estadística</label>
                </div>
            </div>

            <!-- Categoría 2: Programación -->
            <div class="border-t pt-2">
                <span class="font-bold text-gray-700">Programación:</span>
                <div class="flex flex-wrap gap-4 mt-1">
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkLaravel" class="check-subcat w-4 h-4" value="laravel"> Laravel</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkJavascript" class="check-subcat w-4 h-4" value="javascript"> JavaScript</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkBasesdatos" class="check-subcat w-4 h-4" value="basesdatos"> Bases de Datos</label>
                </div>
            </div>

            <!-- Categoría 3: Redes -->
            <div class="border-t pt-2">
                <span class="font-bold text-gray-700">Redes:</span>
                <div class="flex flex-wrap gap-4 mt-1">
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkCisco" class="check-subcat w-4 h-4" value="cisco"> Cisco</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkSubnetting" class="check-subcat w-4 h-4" value="subnetting"> Subnetting</label>
                    <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" id="checkSeguridad" class="check-subcat w-4 h-4" value="seguridad"> Seguridad</label>
                </div>
            </div>
        </div>

        <!-- Contenedor de Artículos / Servicios con clases correspondientes a las subcategorías -->
        <div class="space-y-4">
            
            <div class="articulo calculo p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">Asesoría de Cálculo Diferencial</h3>
                <p class="text-gray-600">Límites, derivadas y problemas de optimización matemática.</p>
            </div>

            <div class="articulo laravel p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">Desarrollo Web con Laravel</h3>
                <p class="text-gray-600">Creación de rutas, controladores, vistas Blade y migraciones.</p>
            </div>

            <div class="articulo cisco p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">Configuración de Routers Cisco</h3>
                <p class="text-gray-600">Topologías de red, protocolos de enrutamiento y comandos CCNA.</p>
            </div>

            <div class="articulo algebra p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">Álgebra Lineal Avanzada</h3>
                <p class="text-gray-600">Matrices, determinantes y espacios vectoriales.</p>
            </div>

            <div class="articulo javascript p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">Fundamentos de JavaScript</h3>
                <p class="text-gray-600">Manipulación del DOM, eventos y funciones con JS plano.</p>
            </div>

            <div class="articulo subnetting p-4 bg-gray-50 border border-gray-200 rounded">
                <h3 class="font-bold text-lg text-gray-800">Diseño de Redes y Subnetting</h3>
                <p class="text-gray-600">Cálculo de máscaras de subred y direccionamiento IPv4/IPv6.</p>
            </div>

        </div>
    </div>

    <!-- Lógica en JavaScript simple y estructurada -->
    <script>
        // 1. Enlace a componentes principales mediante getElementById
        let checkTodos = document.getElementById("checkTodos");

        // Enlaces a los checkboxes de subcategorías por su ID
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

        // 2. Función explícita para filtrar los artículos
        function filtrarArticulos() {
            // Enlace a divisiones mediante getElementsByClassName
            let listaArticulos = document.getElementsByClassName("articulo");

            // Verificamos si el check "Todos" está marcado o si no hay ninguno seleccionado
            let algunCheckMarcado = false;
            for (let i = 0; i < checks.length; i++) {
                if (checks[i].checked) {
                    algunCheckMarcado = true;
                    break;
                }
            }

            // Si "Todos" está activo o no hay selecciones, mostramos todo
            if (checkTodos.checked || !algunCheckMarcado) {
                for (let i = 0; i < listaArticulos.length; i++) {
                    listaArticulos[i].classList.remove("hidden");
                }
                return;
            }

            // De lo contrario, ocultamos todos primero y luego mostramos los que coincidan con los checks activos
            for (let i = 0; i < listaArticulos.length; i++) {
                listaArticulos[i].classList.add("hidden");
                
                // Revisamos cada checkbox activo
                for (let j = 0; j < checks.length; j++) {
                    if (checks[j].checked) {
                        let subcat = checks[j].value;
                        // Si el artículo contiene la clase de la subcategoría seleccionada, lo mostramos
                        if (listaArticulos[i].classList.contains(subcat)) {
                            listaArticulos[i].classList.remove("hidden");
                        }
                    }
                }
            }
        }

        // 3. Agregar eventos mediante addEventListener
        checkTodos.addEventListener("click", function() {
            if (checkTodos.checked) {
                // Si marcan "Todos", desmarcamos las subcategorías para limpiar
                for (let i = 0; i < checks.length; i++) {
                    checks[i].checked = false;
                }
            }
            filtrarArticulos();
        });

        // Asignar el evento a cada checkbox de subcategoría
        for (let i = 0; i < checks.length; i++) {
            checks[i].addEventListener("click", function() {
                if (this.checked) {
                    checkTodos.checked = false; // Desmarca "Todos" si eligen una subcategoría específica
                }
                filtrarArticulos();
            });
        }
    </script>

</body>
</html>