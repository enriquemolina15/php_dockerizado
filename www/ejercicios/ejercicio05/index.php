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
        <h1>Introduce horas semanales</h1>
        <form action="#" method="get">
            <input type="number" name="horas" placeholder="Introduce numero de horas" required>
            <br>
            <button type="submit">Calcular</button>
            <p>
                <?php
                $horasTotales = $_GET["horas"];
                $valorTotal = 0;
                if (isset($horasTotales)) {
                    if ($horasTotales > 40) {
                        $horasExtras = ($horasTotales -40) * 16;
                        $horasNormales = 40 * 12;
                        $valorTotal =$horasNormales + $horasExtras;
                    } else {
                        $valorTotal = $horasTotales * 12;
                    }
                    echo number_format($valorTotal, 2, ',', '.') . " euros";
                }
                ?>
            </p>
        </form>
    </div>
</body>
</html>
