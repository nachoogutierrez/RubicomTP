<?php 
/*
 * Este es el archivo que procesa las solicitudes.
 * 
 * Los parametros que se envian en la llamada a este script son recibidos
 * en las variables REQUEST, POST o GET, segun el tipo de llamada realizada.
 * 
 * Las entradas deben estar sanitizadas para ser utilizadas, eso es,
 * convertirlas al tipo de dato esperado, de esta manera.
 */

if ($_REQUEST["operador"] == "suma") {
    print $_REQUEST["operando_1"] + $_REQUEST["operando_2"];
}
elseif ($_REQUEST["operador"] == "resta") {
    print $_REQUEST["operando_1"] - $_REQUEST["operando_2"];
}
elseif ($_REQUEST["operador"] == "multiplicacion") {
    print $_REQUEST["operando_1"] * $_REQUEST["operando_2"];
}
elseif ($_REQUEST["operador"] == "division") {
    print $_REQUEST["operando_1"] / $_REQUEST["operando_2"];
}
else {
    print "ERROR";
}
?>