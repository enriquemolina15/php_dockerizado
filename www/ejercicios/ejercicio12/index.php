<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dibuja una Figura</title>
    <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>

<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>

    <div class="container">
        <h1>Dibuja una figura</h1>
        <form method="post">
            <label>Altura: </label>
            <input type="number" name="altura" min="1" required><br><br>

            <label>Figura: </label>
            <select name="figura" required>
                <option value="🌞">Sol</option>
                <option value="🟥">Ladrillo</option>
                <option value="⭐">Estrella</option>
                <option value="🔺">Triángulo</option>
                <option value="❤️">Corazón</option>
            </select><br><br>
            <label>Tipo de dibujo: </label>
            <select name="tipo" required>
                <option value="">Elige una figura</option>
                <option value="izq">Triángulo rectángulo (izquierda)</option>
                <option value="der">Triángulo rectángulo (derecha)</option>
                <option value="piramide">Pirámide</option>
                <option value="rombo">Rombo</option>
            </select><br><br>

            <button type="submit">Generar</button><br><br>
        </form>

        <?php
        echo "<div>";

        if (isset($_POST["altura"]) && isset($_POST["figura"]) && isset($_POST["tipo"])) {
            $altura = $_POST["altura"];
            $figura = $_POST["figura"];
            $tipo = $_POST["tipo"];
             echo "<div style='text-align:left;'>";
            // Triángulo rectángulo (apoyado a la izquierda)
            if ($tipo == "izq") {
                for ($i = 1; $i <= $altura; $i++) {
                    echo str_repeat($figura, $i);
                    echo "<br>";
                }
            }
             echo "</div>";
            // Triángulo rectángulo (apoyado a la derecha)
             echo "<div style='text-align:right;'>";
            if ($tipo == "der") {
                for ($i = 1; $i <= $altura; $i++) {
                    echo str_repeat(" ", $altura - $i);
                    echo str_repeat($figura, $i);
                    echo "<br>";
                }
            }
            echo "</div>";
            // Pirámide
            if ($tipo == "piramide") {
                for ($i = 1; $i <= $altura; $i++) {
                    echo str_repeat(" ", $altura - $i);
                    echo str_repeat($figura, 2 * $i - 1);
                    echo "<br>";
                }

            }
            // Rombo
            if ($tipo == "rombo") {
                for ($i = 1; $i <= $altura; $i++) {
                    echo str_repeat(" ", $altura - $i);
                    echo str_repeat($figura, 2 * $i - 1);
                    echo "<br>";
                }
                for ($i = $altura - 1; $i > 0; $i--) {
                    echo str_repeat(" ", $altura - $i);
                    echo str_repeat($figura, 2 * $i - 1);
                    echo "<br>";
                }
            }

            echo "</div>";
        }
        ?>
    </div>
</body>

</html>