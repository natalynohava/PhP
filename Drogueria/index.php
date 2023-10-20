<?php
function mostrar()
{
    header("Location: vista/index.php?titulo=Drogueria");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="vista/index.php?titulo=Drogueria"><button id="b1" name="b1"> ver inicio </button></a>
    <a href="vista/crear.php?titulo=crear producto"><button id="b1" name="b1">Crear</button></a>
</body>
</html>