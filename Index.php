<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="stilos.css">
</head>
<body>
    <h1>Palabra Palindromo</h1>
    <br>
    <form action="index.php" method="post">
        <label for="Palabra" >Escribe una Palabra</label>
        <input type="text" id="" class="input" name="palabra" value="" required />
        <button type="submit" class="boton" >Comprobar</button>
    </form>
    
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

    
    
</body>
</html>