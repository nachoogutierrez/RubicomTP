<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $longitud = (int)$_POST["longitud"];
    $caracteres = "";

    if (isset($_POST["mayusculas"])) $caracteres .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    if (isset($_POST["minusculas"])) $caracteres .= "abcdefghijklmnopqrstuvwxyz";
    if (isset($_POST["numeros"])) $caracteres .= "0123456789";
    if (isset($_POST["especiales"])) $caracteres .= "!@#$%^&*()_+-=[]{}|;:,.<>?";

    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contraseña Generada</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">
    </head>
    <body class="bg-dark text-light">
    <div class="text-end p-3">
        <button id="toggleTema" class="btn btn-outline-light">☀️ Modo Claro</button>
    </div>
    <div class="container mt-5">
        <div class="card shadow-lg p-4 bg-secondary text-center">
            <h2>🔑 Contraseña Generada</h2>';

    if ($caracteres === "") {
        echo '<div class="alert alert-danger mt-4">Debe seleccionar al menos un criterio.</div>';
    } else {
        $password = "";
        for ($i = 0; $i < $longitud; $i++) {
            $password .= $caracteres[random_int(0, strlen($caracteres) - 1)];
        }

        echo '
        <div class="alert alert-success mt-4">
            <strong>Resultado:</strong><br>
            <div class="input-group mt-3">
                <input type="text" class="form-control text-center" id="password" value="' . htmlspecialchars($password) . '" readonly>
                <button class="btn btn-dark" type="button" id="copyBtn">📋 Copiar</button>
            </div>
            <small id="copyMsg" class="text-light mt-2 d-block"></small>
        </div>';
    }

    echo '<a href="../index.php" class="btn btn-outline-light mt-3">⬅️ Volver</a>
    </div>
    <script src="../assets/js/copiar.js"></script>
    <script src="../assets/js/tema.js"></script>
    </body>
    </html>';
}
?>
