<?php

$palabra= "";
if ($_POST){

        $palabra = $_POST["palabra"];
        function esPalindromo($palabra) {
       // Convertir la palabra a minúsculas y eliminar espacios en blanco 
        $palabra = strtolower(str_replace(' ', '', $palabra));
       // Comparar la palabra original con su versión invertida
        return $palabra === strrev($palabra);
        }

        if (esPalindromo($palabra)) {
            echo "<p>la palabra $palabra si es un palíndromo.</p>";
        } else {
            echo "<p>La palabra $palabra no es un palíndromo.</p>";
        }       
}
?>
