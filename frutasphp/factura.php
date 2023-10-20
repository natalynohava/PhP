<?php
function proceso(){
    $correo = $_POST['correo'];
    $nombre = $_POST['name'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];

    $Tsubtotal = ($valor * $desc) / 100;
    $total = $valor - $Tsubtotal;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_factura.css">
    
</head>
<body>
    <div class="container">
        <div class="for">
        <div class="i-1"><?php echo "Nombre: " . $correo = $_POST['correo']; "<br><br>";?></div>
        <br><br>
        <div class="i-1"><?php echo "Coreo: " . $nombre = $_POST['name']; "<br><br>";?></div>
        <br><br>
        <div class="i-1"><?php

        $valor = $_POST['valor'];
        $desc = $_POST['desc'];

        $Tsubtotal = ($valor * $desc) / 100;
        $total = $valor - $Tsubtotal;
        echo "Total a pagar: " . $total . "<br><br>";?></div>
        </div>
    </div>
</body>
</html>