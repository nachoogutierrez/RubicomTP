<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 / Conversor de medidas</title>
</head>
<body>
    <?php
    if (isset ($_POST ['metros']) && isset ($_POST ['conversion'])) {
        $metros = $_POST ['metros'];
        $tipo = $_POST['conversion'];

        echo "Convertiendo $metros metros:<br>";

        if($tipo == "pulgadas"){
            $resultado = $metros * 39.37;
            echo "Resultado: $resultado pulgadas";
        }

        elseif ($tipo == "centimetros"){
            $resultado = $metros *100;
            echo "Resultado: $resultado centimetros";
        }

        elseif ($tipo == "pies"){
            $resultado = $metros *3.281;
            echo "Resultado: $resultado pies";
        }
    }
    ?>
  <form method="POST">
        <p>Ingrese la cantidad en metros:</p>
        <input type="number" name="metros" step="0.01" required>
        
        <p>Convertir a:</p>
        <select name="conversion" required>
            <option value="pulgadas">Pulgadas</option>
            <option value="centimetros">Centímetros</option>
            <option value="pies">Pies</option>
        </select>
        
        <br><br>
        <input type="submit" value="Convertir">
    </form>
</body>
</html>