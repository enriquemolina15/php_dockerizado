<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial de un número</title>
    <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>
<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>

    <div class="container">
        <h1>Factorial de un número</h1>
        <form action="#" method="get">
            <input type="number" name="n" placeholder="Introduce número" required>
            <br>
            <button type="submit">Mostrar</button>
        </form>

        <?php
        function factorialRecursivo($n) {
            if ($n == 0 || $n == 1) {
                return 1;
            } else {
                return $n * factorialRecursivo($n - 1);
            }
        }

        if (isset($_GET["n"])) {
            $n = intval($_GET["n"]);

           
            $factorial = 1;
            $producto = "";
            if ($n == 0 || $n == 1) {
                $factorial = 1;
                $producto = "1";
            } else {
                for ($i = 1; $i <= $n; $i++) {
                    $factorial *= $i;
                    $producto .= $i . "*";
                }
                $producto = rtrim($producto, "*");
            }

            $recursivo = factorialRecursivo($n);

            echo "<p>El factorial de $n! = $producto = $factorial</p>";
        }
        ?>
    </div>
</body>
</html>
