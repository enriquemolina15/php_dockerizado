<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Juego cartas</title>
    <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>

<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>

    <div class="container">
        <h1>Juego cartas</h1>

        <?php
        // Palos de la baraja
        $palos = ["Oros", "Copas", "Espadas", "Bastos"];

        // Figuras/números de la baraja
        $numeros = [1, 2, 3, 4, 5, 6, 7, 10, 11, 12]; // baraja española
        
        // Puntuación en Brisca
        $puntos = [
            1 => 11,   // As
            3 => 10,   // Tres
            10 => 2,   // Sota
            11 => 3,   // Caballo
            12 => 4    // Rey
        ];

        // Nombres de las figuras
        $nombres = [
            1 => "As",
            10 => "Sota",
            11 => "Caballo",
            12 => "Rey"
        ];

        // Generar la baraja completa
        $baraja = [];
        foreach ($palos as $palo) {
            foreach ($numeros as $num) {
                // Si es figura, mostrar nombre; si no, número
                $nombreCarta = ($nombres[$num] ?? $num) . " de $palo";
                $valor = $puntos[$num] ?? 0;

                $baraja[] = ["carta" => $nombreCarta, "valor" => $valor];
            }
        }

        // Barajar y escoger 10 cartas
        shuffle($baraja);
        $mano = array_slice($baraja, 0, 10);

        // Mostrar cartas y sumar puntos
        $total = 0;
        echo "<ol>";
        foreach ($mano as $carta) {
            echo "<li>{$carta['carta']} → {$carta['valor']} puntos</li>";
            $total += $carta["valor"];
        }
        echo "</ol>";

        echo "<p><strong>Total de puntos: $total</strong></p>";
        ?>
        <form method="get">
            <button type="submit">Repartir de nuevo</button>
        </form>
    </div>
</body>

</html>