<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
</head>
<body>
    <h2>Calculadora de Factorial</h2>
    
    <?php
    // Ejercicio 2: Calcular el factorial de un número entero
    
    // Verificamos si se envió un número por el formulario
    if(isset($_POST['numero'])) {
        // "Pedimos" el numero al usuario a través del formulario
        $numero = trim($_POST['numero']);
        
        //Verificamos que el numero sea mayor o igual a 0
        if($numero < 0) {
            echo "No se puede calcular el factorial de un numero negativo.";
        }
        else {
            $factorial = 1; //Inicializamos el factorial en 1

            for($i = 1; $i <= $numero; $i++){
                $factorial *=$i; //Multiplicamos el valor actual de $factorial por $i
            }
            echo "El factorial de $numero es: $factorial";
        }
    }
    ?>
    
    <!-- Formulario para "pedir" el número al usuario -->
    <form method="POST">
        <label>Ingrese un numero entero: </label>
        <input type="number" name="numero" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>