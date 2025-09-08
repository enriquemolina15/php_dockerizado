<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un numero</title>
    <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>

<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>

    <div class="container">
        <h1>Factorial de un numero</h1>
        <form action="#" method="get">
            <input type="number" name="n" placeholder="Introduce numero " required>
            <br>
            <button type="submit">Mostrar</button>
        </form>
        <?php
        if (isset($_GET["n"])) {
          
            $n = $_GET["n"];

           $factorial = 1;
            $contador = 1;
            $producto = "";
       
        for ($i = 2; $i <= $n; $i++) {
            $factorial *= $i;
            $producto .= $contador++  . "*";
        }
           $producto = $producto . $n;
        echo "<p>El factorial de $n! = $producto = $factorial</p>";

        }
        ?>
    </div>
</body>

</html>