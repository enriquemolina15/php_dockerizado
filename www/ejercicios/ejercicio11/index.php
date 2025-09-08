<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie Fibonacci</title>
    <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>

<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>

    <div class="container">
        <h1>Mostrar los n primeros terminos de la serie Fibonacci</h1>
        <form action="#" method="get">
            <input type="number" name="n" placeholder="Introduce numero " required>
            <br>
            <button type="submit">Mostrar</button>
        </form>
        <?php
        if (isset($_GET["n"])) {
          
            $n = $_GET["n"];

            $a = 0;
            $b = 1;

            echo "<h3>Los primeros $n términos de Fibonacci son:</h3>";
            for ($i = 0; $i < $n; $i++) {
                echo $a . " ";
                $siguiente = $a + $b;
                $a = $b;
                $b = $siguiente;
            }

        }
        ?>
    </div>
</body>

</html>