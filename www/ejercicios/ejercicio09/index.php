<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
     <link rel="stylesheet" href="/ejercicios/css/style1.css">
      <style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 200px;
        }
        th, td {
            border: 1px solid #333;
            padding: 6px;
            text-align: center;
        }
        th {
            background: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>
    <div class="container">
        <h1>Introduce un numero</h1>
        <form action="#" method="get">
            <input type="number" name="n1" placeholder="numero" required>
            <br>
           
            <button type="submit">Generar tabla</button>
        
        </form>
          <?php
        if (isset($_GET["n1"])) {
            $n1 = $_GET["n1"];
            echo "<table>";
            echo "<thead><tr><th colspan='2'>Tabla del $n1</th></tr></thead>";
            echo "<tbody>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $n1 * $i;
                echo "<tr><td>$n1 x $i</td><td>$resultado</td></tr>";
            }
            echo "</tbody></table>";
        }
        ?>
    </div>
</body>
</html>
