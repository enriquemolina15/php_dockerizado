<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <?php
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    $aficiones = $_GET["aficiones"];
    echo "¡Hola $nombre ! Encantado de conocerte.<br>";
    if ($edad < 22) {
        echo "deberias....estudiar";
    } elseif ($edad < 65) {
        echo "A trabajar ";
    } else {
        echo " rrrrr ";
    }
    echo "<br>Aficiones: ";
    echo "<ul>";
    foreach ($aficiones as $aficion) {
        echo "<li>$aficion</li>";
        
    }
    echo "</ul>";
    ?>
    
</body>
</html>