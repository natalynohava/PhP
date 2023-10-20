<?php 
$n1 = "pablo";
$n2 = "piedra";
$titulo = "prosti";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_index.css">
    
</head>
<body>
    <div class="container">
        <h1>FRUVER Mi fruta</h1>
        <br><br>
        <form class="formulario" method="post" action="crear.php">
            <div class="caja_uno">
                <label for="correo">Email:</label>
                <input type="text" class="correo" id="correo" name="correo">
            </div>
            <div class="caja_dos">
                <label>Name:<input type="text" class="name" id="name" name="name"></label>
                <br><br>
                <input type="text" id="valor" class="name" name="valor" placeholder="Valor de la compra">
                <br><br>
                <input type="text" id="desc" class="desc" name="desc" placeholder="Valor del descuento">
            </div>
            <input type="submit" id="boton" class="boton" name="boton" value="Enviar">
        </form>
    </div>
</body>
</html>

