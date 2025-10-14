<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 6 - Generar Secuencias</title>
</head>
<body>
    <h1>Generador de Secuencias</h1>
    
    <?php
    if (isset($_POST['tipo']) && isset($_POST['cantidad'])) {
        $tipo = $_POST['tipo'];
        $cantidad = $_POST['cantidad'];
        
        echo "Generando secuencia de $tipo ($cantidad elementos):<br>";
        
        if ($tipo == "primos") {
            // Secuencia de números primos
            $contador = 0;
            $numero = 2;
            
            while ($contador < $cantidad) {
                $esPrimo = true;
                
                for ($i = 2; $i <= sqrt($numero); $i++) {
                    if ($numero % $i == 0) {
                        $esPrimo = false;
                        break;
                    }
                }
                
                if ($esPrimo) {
                    echo $numero . " ";
                    $contador++;
                }
                $numero++;
            }
        }
        elseif ($tipo == "abecedario") {
            // Secuencia de letras del abecedario
            $letras = range('A', 'Z');
            
            for ($i = 0; $i < $cantidad && $i < 26; $i++) {
                echo $letras[$i] . " ";
            }
        }
        elseif ($tipo == "pares") {
            // Secuencia de números pares
            for ($i = 0; $i < $cantidad; $i++) {
                echo ($i * 2) . " ";
            }
        }
        elseif ($tipo == "impares") {
            // Secuencia de números impares
            for ($i = 0; $i < $cantidad; $i++) {
                echo ($i * 2 + 1) . " ";
            }
        }
        
        echo "<br><br>";
    }
    ?>
    
    <form method="POST">
        <p>Tipo de secuencia:</p>
        <select name="tipo" required>
            <option value="primos">Números Primos</option>
            <option value="abecedario">Letras del Abecedario</option>
            <option value="pares">Números Pares</option>
            <option value="impares">Números Impares</option>
        </select>
        
        <p>Cantidad de elementos:</p>
        <input type="number" name="cantidad" min="1" max="50" value="10" required>
        
        <br><br>
        <input type="submit" value="Generar Secuencia">
    </form>
</body>
</html>