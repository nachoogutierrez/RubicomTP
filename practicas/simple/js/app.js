/**
 *  app.js
 * 
 *  En este archivo vamos a colocar todo el codigo javascript necesario para darle vida a la aplicacion,
 *  por ejemplo, qué pasa cuando haces click en un enlace, cómo afecta el cambio del valor en un control
 *  al comportamiento de la app, carga de contenido vía ajax, etc.
 */
$(function() {

    // Aquí el código funcional, como los eventos de click
    cargarEventos();
    
});

// Aquí las funciones a utilizar, como cargarPantalla(), realizarLogin(), etc.

function cargarEventos() {
    $("#boton-calcular").off("click").on("click",
        function() {
            $.post(
                "calcular.php",
                {
                    "operando_1": $("#campo-operando-1").val(),
                    "operando_2": $("#campo-operando-2").val(),
                    "operador": $("#campo-operador").val()
                },
                function(response) {
                    $("#campo-resultado").text(response);
                }
            );
        }
    );
}
