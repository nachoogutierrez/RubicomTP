<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PWA Simple</title>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href="recursos/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="recursos/bootstrap/bootstrap.min.css" rel="stylesheet">
        <script src="recursos/jquery/jquery.min.js"></script>
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column align-items-center justify-content-start vh-100">
        <header>
            <div class="m-2">
                <a href=".">
                    <img src="img/icon.png" width="40" alt="">
                </a>
            </div>
            <div class="flex-grow-1">
                <span>Calculadora</span>
            </div>
        </header>
        <div id="pantalla-principal" class="container mt-4">
            <div class="row">
                <div class="col-sm-12">
                    <input type="number" id="campo-operando-1">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <select id="campo-operador">
                        <option value="suma">+</option>
                        <option value="resta">-</option>
                        <option value="multiplicacion">x</option>
                        <option value="division">%</option>
                    </select>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <input type="number" id="campo-operando-2">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <span id="campo-resultado"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="#" id="boton-calcular">Calcular</a>
                </div>
            </div>
        </div>
        <script src="recursos/bootstrap/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
