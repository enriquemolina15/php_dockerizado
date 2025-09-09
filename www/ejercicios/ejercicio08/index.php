<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordena de menor a mayor</title>
     <link rel="stylesheet" href="/ejercicios/css/style1.css">
</head>
<body>
    <nav>
        <a href="/ejercicios/">Inicio</a>
    </nav>
    <div class="container">
        <h1>Ordena de menor a mayor</h1>
        <form action="#" method="get">
            <input type="number" name="n1" placeholder="primer numero" required>
            <br>
            <input type="number" name="n2" placeholder="segundo numero" required>
            <br>
            <input type="number" name="n3" placeholder="tercer numero" required>
            <br>
            <button type="submit">Ordena</button>
            <p>
               <?php
                    if (isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["n3"])) {
                        $n1 = $_GET["n1"];
                        $n2 = $_GET["n2"];
                        $n3 = $_GET["n3"];

                      
                        $numeros = [$n1, $n2, $n3];

                        echo "Números introducidos:<br>";
                        for ($i = 0; $i < count($numeros); $i++) {
                            echo "Número " . ($i+1) . ": " . $numeros[$i] . "<br>";
                        }

                       
                        sort($numeros);

                        echo "<br>Números ordenados de menor a mayor:<br>";
                        for ($i = 0; $i < count($numeros); $i++) {
                            echo "Posición " . ($i+1) . ": " . $numeros[$i] . "<br>";
                        }
                    }
                    ?>

            </p>
        </form>
    </div>
</body>
</html>
