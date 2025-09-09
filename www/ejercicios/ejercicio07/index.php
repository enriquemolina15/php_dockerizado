<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de salario semanal</title>
     <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>
<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>
    <div class="container">
        <h1>Calcular los segundos que faltan para la 00:00</h1>
        <form action="#" method="get">
            <input type="number" name="horas" placeholder="Horas (0-23)" min="0" max="23"  required>
            <br>
            <input type="number" name="minutos" placeholder="Minutos (0-59)" min="0" max="59" required>
            <br>
            <button type="submit">Calcular</button>
            <p>
                <?php
                $horas = $_GET["horas"];
                $minutos = $_GET["minutos"];
                $segundosTotales = 24 * 60 * 60;
                if (isset($horas)) {
                   $HorasEnSegundos = $horas * 60 * 60;
                   $minutosEnSEgundos = $minutos * 60;
                   $segundosTranscurridos = $HorasEnSegundos + $minutosEnSEgundos;
                    echo number_format($segundosTotales - $segundosTranscurridos, 2, ',', '.') . " segundos";
                }
                ?>
            </p>
        </form>
    </div>
</body>
</html>
