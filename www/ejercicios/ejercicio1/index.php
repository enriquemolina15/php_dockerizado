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
        <h1>Conversor a Pesetas</h1>
        <form action="#" method="get">
            <input type="number" name="euro" placeholder="Introduce euros" required>
            <br>
            <button type="submit">Convertir</button>
            <p>
                <?php
                if (isset($_GET["euro"])) {
                    $pesetas = $_GET["euro"] * 166.386; // valor real de la conversión
                    echo number_format($pesetas, 2, ',', '.') . " pesetas";
                }
                ?>
            </p>
        </form>
    </div>
</body>
</html>
