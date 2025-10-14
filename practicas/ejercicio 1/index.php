<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Suma de números pares</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2>Ejercicio 1: Suma de números pares</h2>
                        <a href="../index.html" class="btn btn-light btn-sm mt-2">← Volver al inicio</a>
                    </div>
                    <div class="card-body">
                        <p class="lead">Suma todos los números enteros pares desde 1 hasta un numero dado</p>
                        
                        <form method="POST" class="mb-4">
                            <div class="mb-3">
                                <label for="numero" class="form-label">Ingresa un número:</label>
                                <input type="number" class="form-control" id="numero" name="numero" min="1" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Calcular suma</button>
                        </form>

                        <?php
                        function sumarPares($numero) {
                            $suma = 0;
                            for ($i = 1; $i <= $numero; $i++) {
                                if ($i % 2 == 0) {
                                    $suma += $i;
                                }
                            }
                            return $suma;
                        }

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $numero = intval($_POST['numero']);
                            $resultado = sumarPares($numero);
                            
                            echo "<div class='alert alert-success'>
                                    <h4>Resultado:</h4>
                                    <p>La suma de los números pares desde 1 hasta $numero es: <strong>$resultado</strong></p>
                                  </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>