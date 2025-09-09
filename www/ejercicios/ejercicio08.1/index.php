<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el volumen de un cono</title>
    <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>

<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>

    <div class="container">
        <h1>Ordena los numeros</h1>
        <form action="#" method="get">
            <input type="number" name="num1" placeholder="Introduce numero " required>
            <br>
            <input type="number" name="num2" placeholder="Introduce numero" required>
            <br>
            <input type="number" name="num3" placeholder="Introduce numero" required>
            <br>
            <button type="submit">Calcular</button>
        </form>
        <?php
        if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["num3"])) {
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $num3 = $_GET["num3"];

            // Contador y cadena
            $contador = 0;
            $numerosIntroducidos = $num1 . "," . $num2 . "," . $num3;
            $resultado = "";

            // Bucle que empieza desde 0
            for ($i = 0;$contador < 3 ; $i++) {
                if ($i == $num1 || $i == $num2 || $i == $num3) {
                    $contador++;
                    $resultado .= $i . ","; // concatenar con coma
        
                   
                }
            }

            // Quitar la última coma
            $resultado = rtrim($resultado, ",");

            // Mostrar resultados
            echo "<p>Numeros introducidos: $numerosIntroducidos</p><br>";
            echo "<p>Numeros ordenados: $resultado</p>";
        }
        ?>
    </div>
</body>

</html>