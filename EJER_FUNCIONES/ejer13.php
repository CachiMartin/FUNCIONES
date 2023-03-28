<?php

//Ejemplo #1 Ejemplo de strstr()

$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // mostrará @example.com

$user = strstr($email, '@', true); // Desde PHP 5.3.0
echo $user; // mostrará name
?>