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

    <?php
    $numeros = [];
    $media = "";
    ?>
    <div class="container">
        <h1>Calcular media</h1>
         <p>Introduce un numero negativo para calcular la media</p>
        
        <input type="number" name="numInt" id="numInt" placeholder="Introduce un número">


        <p id="listaNums">Números introducidos: </p>


        
        <form action="#" method="get">
            <input type="hidden" name="lista" id="listaHidden" value="<?php echo implode(",", $numeros); ?>">
            <input type="hidden" id="mediaInput" name="media" value="<?php echo $media; ?>">
            <button type="button" id="boton">Añadir</button>

        </form>
        <?php

        if (isset($_GET["media"]) && isset($_GET["lista"])) {
            $media = $_GET["media"];
            $lista = $_GET["lista"];
            echo "<p>lista de numeros: $lista</p>";
            echo "<p>media de los numeros: $media</p>";
        }
        ?>

    </div>

    <script>
        let numeros = [];
        const input = document.getElementById("numInt");
        const boton = document.getElementById("boton");
        input.addEventListener("input", function () {
            let num = parseFloat(input.value);

            if (!isNaN(num) && num > 0) {
                boton.textContent = "Añadir";
                boton.type = "button";
            } else if (!isNaN(num) && num < 0) {
                boton.textContent = "Calcular";
                boton.type = "submit";
            } else {
                // es par que no cambio con solo pone "-"
                boton.textContent = "Añadir";
                boton.type = "button";
            }

        });

        document.getElementById("boton").addEventListener("click", function () {
            let num = parseFloat(input.value);
           


            if (isNaN(num)) {
                alert("Introduce un número válido");
                return;
            }

            if (num > 0) {
                numeros.push(num);
                document.getElementById("listaNums").innerText = "Números introducidos: " + numeros.join(", ");
                document.getElementById("listaHidden").value = numeros.join(",");
            } else {
                if (numeros.length > 0) {
                    let suma = numeros.reduce((a, b) => a + b, 0);
                    let media = suma / numeros.length;
                    document.getElementById("mediaInput").value = media;
                } else {
                    alert("No se introdujeron números válidos");
                }
                numeros = []; 
                document.getElementById("listaNums").innerText = "Números introducidos: ";
            }

            input.value = "";
            input.focus();
        });
    </script>
</body>

</html>