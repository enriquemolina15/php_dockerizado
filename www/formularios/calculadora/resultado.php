<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
        <?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $suma = $x + $y;
    ?>
    <h1>
        <?php
        echo $suma
        ?>

</h1>
    
</body>
</html>