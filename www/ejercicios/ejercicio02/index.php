<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Factura con IVA</title>
    <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>
<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>

    <div class="container">
        <h1>Cálculo de IVA</h1>
        <form action="#" method="get">
            <input type="number" name="base" placeholder="Base imponible (€)" step="0.01" required>
            <br>
            <button type="submit">Calcular</button>
        </form>
        <?php
        if (isset($_GET["base"])) {
            $base = $_GET["base"];
            $iva = $base * 0.21;
            $total = $base + $iva;

            echo "<p>Base imponible: " . number_format($base, 2, ',', '.') . " €</p>";
            echo "<p>IVA (21%): " . number_format($iva, 2, ',', '.') . " €</p>";
            echo "<p>Total factura: <strong>" . number_format($total, 2, ',', '.') . " €</strong></p>";
        }
        ?>
    </div>
</body>
</html>
