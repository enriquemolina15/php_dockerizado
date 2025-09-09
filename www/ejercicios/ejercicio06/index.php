<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu horoscopo por fecha de nacimiento</title>
     <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>
    
<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>
    <div class="container">
        <h1>Tu Horóscopo</h1>
        <form action="#" method="get">
            <input type="number" name="dia" placeholder="Día" min="1" max="31" required>
            <input type="number" name="mes" placeholder="Mes" min="1" max="12" required>
            <br>
            <button type="submit">Calcular</button>
        </form>
        <?php
        if (isset($_GET["dia"]) && isset($_GET["mes"])) {
            $dia = (int) $_GET["dia"];
            $mes = (int) $_GET["mes"];
            $signo = "";

            if (($dia >= 21 && $mes == 3) || ($dia <= 20 && $mes == 4)) {
                $signo = "Aries";
            } elseif (($dia >= 21 && $mes == 4) || ($dia <= 21 && $mes == 5)) {
                $signo = "Tauro";
            } elseif (($dia >= 22 && $mes == 5) || ($dia <= 21 && $mes == 6)) {
                $signo = "Géminis";
            } elseif (($dia >= 22 && $mes == 6) || ($dia <= 22 && $mes == 7)) {
                $signo = "Cáncer";
            } elseif (($dia >= 23 && $mes == 7) || ($dia <= 23 && $mes == 8)) {
                $signo = "Leo";
            } elseif (($dia >= 24 && $mes == 8) || ($dia <= 22 && $mes == 9)) {
                $signo = "Virgo";
            } elseif (($dia >= 23 && $mes == 9) || ($dia <= 22 && $mes == 10)) {
                $signo = "Libra";
            } elseif (($dia >= 23 && $mes == 10) || ($dia <= 22 && $mes == 11)) {
                $signo = "Escorpio";
            } elseif (($dia >= 23 && $mes == 11) || ($dia <= 21 && $mes == 12)) {
                $signo = "Sagitario";
            } elseif (($dia >= 22 && $mes == 12) || ($dia <= 20 && $mes == 1)) {
                $signo = "Capricornio";
            } elseif (($dia >= 21 && $mes == 1) || ($dia <= 19 && $mes == 2)) {
                $signo = "Acuario";
            } elseif (($dia >= 20 && $mes == 2) || ($dia <= 20 && $mes == 3)) {
                $signo = "Piscis";
            } else {
                $signo = "Fecha inválida";
            }

            echo "<p>Tu signo es: <strong>$signo</strong></p>";
        }
        ?>
    </div>
</body>
</html>
