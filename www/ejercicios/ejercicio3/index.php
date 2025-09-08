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
        <h1>Calcular el volumen de un cono</h1>
        <form action="#" method="get">
            <input type="number" name="radio" placeholder="Introduce el radio (r)" step="0.1" required>
            <br>
            <input type="number" name="altura" placeholder="Introduce la altura (h)" step="0.1" required>
            <br>
            <button type="submit">Calcular</button>
        </form>
        <?php
        if (isset($_GET["radio"]) && isset($_GET["altura"])) {
            $radio = $_GET["radio"];
            $altura = $_GET["altura"];
            $v = (1/3) * pi() * pow($radio, 2) * $altura;

            echo "<p>Volumen total: <strong>" . number_format($v, 2, ',', '.') . " unidades cúbicas</strong></p>";
        }
        ?>
    </div>
</body>
</html>
