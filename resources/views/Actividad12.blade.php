<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 12 - Acordeón</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Preguntas Frecuentes - Tutorías</h1>

        <!-- Pregunta 1 -->
        <div id="pregunta1" class="bg-gray-200 hover:bg-gray-300 p-4 rounded-t cursor-pointer font-semibold transition">
            ¿Cómo sé quién es mi tutor asignado?
        </div>
        <div id="respuesta1" class="hidden p-4 bg-gray-50 border border-gray-200 rounded-b mb-4 text-gray-700">
            Puedes consultarlo al inicio de cada ciclo escolar en la sección de directorio o acudiendo a la Coordinación de Carrera de tu área.
        </div>

        <!-- Pregunta 2 -->
        <div id="pregunta2" class="bg-gray-200 hover:bg-gray-300 p-4 rounded-t cursor-pointer font-semibold transition">
            ¿La tutoría tiene algún costo?
        </div>
        <div id="respuesta2" class="hidden p-4 bg-gray-50 border border-gray-200 rounded-b mb-4 text-gray-700">
            No, todas las sesiones de tutoría y asesoría entre pares son completamente gratuitas para la comunidad estudiantil.
        </div>

        <!-- Pregunta 3 (Nueva) -->
        <div id="pregunta3" class="bg-gray-200 hover:bg-gray-300 p-4 rounded-t cursor-pointer font-semibold transition">
            ¿En qué modalidades puedo recibir tutoría?
        </div>
        <div id="respuesta3" class="hidden p-4 bg-gray-50 border border-gray-200 rounded-b mb-4 text-gray-700">
            Ofrecemos tutoría individual, grupal y asesoría entre pares tanto en modalidad presencial como en línea.
        </div>

    </div>

    <!-- Lógica en JavaScript solicitada -->
    <script>
        // Obtener elementos mediante getElementById
        let p1 = document.getElementById("pregunta1");
        let r1 = document.getElementById("respuesta1");
        
        let p2 = document.getElementById("pregunta2");
        let r2 = document.getElementById("respuesta2");

        let p3 = document.getElementById("pregunta3");
        let r3 = document.getElementById("respuesta3");

        // Función para mostrar u ocultar respuestas utilizando classList
        function toggle(respuesta) {
            respuesta.classList.toggle("hidden");
        }

        // Asignar eventos utilizando addEventListener
        p1.addEventListener("click", function() {
            toggle(r1);
        });

        p2.addEventListener("click", function() {
            toggle(r2);
        });

        p3.addEventListener("click", function() {
            toggle(r3);
        });
    </script>

</body>
</html>