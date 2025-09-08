<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media de numeros</title>
    <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>

<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>

    <div class="container">
        <h1>Calcular media</h1>
        <p>Introduce un numero negativo para calcular la media</p>

        <?php

        if (isset($_GET["num"])) {
            $num = $_GET["num"];
            $lista = $_GET["lista"];


            if ($lista) {
                $numeros = explode(",", $lista);
            } else {
                $numeros = [];
            }

            if ($num >= 0) {

                $numeros[] = $num;

                echo "Números: " . implode(", ", $numeros);
                echo "<br>Introduce otro número o un negativo para terminar.";
            } else {

                if (count($numeros) > 0) {
                    $media = array_sum($numeros) / count($numeros);
                    echo "La media es: $media";
                } else {
                    echo "No se introdujeron números válidos.";
                }
                $numeros = [];
            }


            echo '<form action="#" method="get">
                <input type="number" name="num" required>
                <input type="hidden" name="lista" value="' . implode(",", $numeros) . '">
                <button type="submit">Enviar</button>
              </form>';
        } else {

            echo '<form action="#" method="get">
                <input type="number" name="num" required>
                <input type="hidden" name="lista" value="">
                <button type="submit">Enviar</button>
              </form>';
        }
        ?>
    </div>
</body>

</html>