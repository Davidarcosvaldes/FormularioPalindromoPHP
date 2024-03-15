<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1.0</title>
    <link rel="stylesheet" href="stilos.css">
</head>
<body>
    <header>
        <menu class="menu">
            <div class="logo">
                eBFactory
            </div> 
            <ul>
                <li>Home</li>
                <li>Contactos</li>
                <li>Acerca de</li>
            </ul>
        </menu>
    </header>
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
                echo "<p>La palabra $palabra si es un palíndromo.</p>";
            } else {
                echo "<p>La palabra $palabra no es un palíndromo.</p>";
            }       
    }
    ?>
    <p>Palindromo: Un palindromo es una palabra, frase que se lee igual hacia adelante como hacia atrás ignorando los espacios. </p>
    <p>Tambien se le puede aplicar a una cadena de numeros</p>

    <footer>
        <div class="footer">
            &copy; David Arcos 2024 eBfactory. Todos los derechos reservados.
        </div>

    </footer>
    
</body>
</html>
