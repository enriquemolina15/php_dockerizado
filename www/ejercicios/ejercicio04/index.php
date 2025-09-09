<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor a Pesetas</title>
     <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>
<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>
    <div class="container">
        <h1>¿Que hora es?</h1>
        <form action="#" method="get">
            <input type="number" name="hora"  placeholder="Introduce la hora (0-23)" min="0" max="23"  required>
            <br>
            <button type="submit">pulsa</button>
            <p>
                  <?php
                        if (isset($_GET["hora"])) {
                            $hora = (int) $_GET["hora"];
                            if ($hora >= 6 && $hora <= 12) {
                                echo "<p>¡Buenos días!</p>";
                            } elseif ($hora >= 13 && $hora <= 20) {
                                echo "<p>¡Buenas tardes!</p>";
                            } else {
                                echo "<p>¡Buenas noches!</p>";
                            }
                        }
                        ?>
            </p>
        </form>
    </div>
</body>
</html>
