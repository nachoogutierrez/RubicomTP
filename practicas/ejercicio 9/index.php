<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Contraseñas Seguras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<!-- Botón de modo oscuro/claro -->
<div class="text-end p-3">
    <button id="toggleTema" class="btn btn-outline-light">☀️ Modo Claro</button>
</div>

<div class="container mt-4">
    <div class="card shadow-lg p-4 bg-secondary">
        <h2 class="text-center mb-4">🔐 Generador de Contraseñas Seguras</h2>

        <form method="post" action="includes/generar.php" id="formGenerador">
            <div class="mb-3">
                <label for="longitud" class="form-label">Longitud de la contraseña:</label>
                <input type="number" class="form-control" id="longitud" name="longitud" min="4" max="50" value="8" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Criterios:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="mayusculas" name="mayusculas" checked>
                    <label class="form-check-label" for="mayusculas">Mayúsculas (A-Z)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="minusculas" name="minusculas" checked>
                    <label class="form-check-label" for="minusculas">Minúsculas (a-z)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="numeros" name="numeros" checked>
                    <label class="form-check-label" for="numeros">Números (0-9)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="especiales" name="especiales" checked>
                    <label class="form-check-label" for="especiales">Caracteres especiales (!@#$...)</label>
                </div>
            </div>

            <!-- Barra de seguridad -->
            <div class="mb-3">
                <label class="form-label">Nivel de seguridad estimado:</label>
                <div class="progress">
                    <div class="progress-bar bg-danger" id="barraSeguridad" style="width: 20%">Débil</div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Generar Contraseña</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/copiar.js"></script>
<script src="assets/js/tema.js"></script>

<!-- Script barra seguridad -->
<script>
const barra = document.getElementById('barraSeguridad');
const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const longitudInput = document.getElementById('longitud');

function actualizarNivel() {
    let puntaje = 0;
    const longitud = parseInt(longitudInput.value);

    checkboxes.forEach(c => { if (c.checked) puntaje += 1; });
    if (longitud >= 8) puntaje += 1;
    if (longitud >= 12) puntaje += 1;

    let nivel = 'Débil', color = 'bg-danger', ancho = 20;

    if (puntaje >= 3 && puntaje < 5) {
        nivel = 'Media'; color = 'bg-warning'; ancho = 60;
    } else if (puntaje >= 5) {
        nivel = 'Fuerte'; color = 'bg-success'; ancho = 100;
    }

    barra.className = 'progress-bar ' + color;
    barra.style.width = ancho + '%';
    barra.textContent = nivel;
}

checkboxes.forEach(c => c.addEventListener('change', actualizarNivel));
longitudInput.addEventListener('input', actualizarNivel);
actualizarNivel();
</script>
</body>
</html>
