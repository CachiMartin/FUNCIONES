<?php

//Ejemplo #1 Busca la cadena de texto "php"


// La "i" después del delimitador de patrón indica una búsqueda
// sin tener en cuenta mayúsculas/minúsculas
if (preg_match("/php/i", "PHP es el lenguaje de secuencias de comandos web preferido.")) {
    echo "Se encontró una coincidencia.";
} else {
    echo "No se encontró ninguna coincidencia.";
}
?>