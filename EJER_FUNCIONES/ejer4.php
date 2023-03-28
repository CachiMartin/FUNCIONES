<?php

// Ejemplo #1 Ejemplo settype()

$foo = "5bar"; // cadena
$bar = true;   // booleano

settype($foo, "integer"); // $foo es ahora 5   (entero)
settype($bar, "string");  // $bar es ahora "1" (cadena)
?>
