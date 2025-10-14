<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5 - Buscar en Arreglo</title>
</head>
<body>
    <h1>Buscar Número en Arreglo</h1>
    
    <?php
    // Arreglo predefinido

    $arreglo = array(10, 25, 8, 45, 3, 17, 32, 9, 61, 5);
    
    if (isset($_POST['numero'])) {
        $numeroBuscado = $_POST['numero'];
        
        echo "Arreglo: " . implode(", ", $arreglo) . "<br>";
        echo "Buscando el número: $numeroBuscado<br>";
        
        // Buscar el número en el arreglo
        $encontrado = false;
        $posicion = -1;
        
        for ($i = 0; $i < count($arreglo); $i++) {
            if ($arreglo[$i] == $numeroBuscado) {
                $encontrado = true;
                $posicion = $i;
                break;
            }
        }
        
        // Mostrar resultado
        if ($encontrado) {
            echo "El número $numeroBuscado está en la posición: $posicion";
        } else {
            echo "El número $numeroBuscado no se encuentra en el arreglo";
        }
        
        echo "<br><br>";
    }
    ?>
    
    <form method="POST">
        <p>Ingrese el número a buscar:</p>
        <input type="number" name="numero" required>
        <br><br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>