<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3 - Numeros Primos</title>
</head>
<body>
    <h1>Verificador de Numeros Primos</h1>
    
    <?php
    // Ejercicio 3: Calcular si un numero es primo
    
    if (isset($_POST['numero'])) {  //isset es una funcion que verifica si una variable esta definida y no es null
        $numero = $_POST['numero'];  //$_POST['numero'] - Toma el número que escribió el usuario
        
        echo "<h2>Verificando el numero: $numero</h2>";
        
        // Verificar que este entre 1 y 100
        if ($numero < 1 || $numero > 100) {
            echo "<p>Error: El numero debe estar entre 1 y 100</p>";
        } else {
            // Calcular si es primo
            $esPrimo = true;
            
            if ($numero == 1) {
                $esPrimo = false;
            } else {
                // AQUI ESTA EL FOR - Probamos divisiones
                for ($i = 2; $i < $numero; $i++) {
                    if ($numero % $i == 0) {
                        $esPrimo = false;
                        break;
                    }
                }
            }
            
            // Mostrar resultado
            if ($esPrimo) {
                echo "<p>El numero $numero ES PRIMO</p>";
            } else {
                echo "<p>El numero $numero NO ES PRIMO</p>";
            }
        }
    }
    ?>
    
    <form method="POST">
        <p>Ingrese un numero (1-100):</p>
        <input type="number" name="numero" min="1" max="100">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>