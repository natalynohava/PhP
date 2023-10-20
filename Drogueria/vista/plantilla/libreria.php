<?php
function proceso(){
    $id = $_POST["id"];
    $cliente = $_POST["cliente"];
    $medicina1 = $_POST["m1"];
    $cantidad1 = $_POST["c1"];
    $valor1 = $_POST["v1"];
    $medicina2 = $_POST["m2"];
    $cantidad2 = $_POST["c2"];
    $valor2 = $_POST["v2"];
    $medicina3 = $_POST["m3"];
    $cantidad3 = $_POST["c3"];
    $valor3 = $_POST["v3"];

    $subtotal1 = $cantidad1 * $valor1;
    $subtotal2 = $cantidad2 * $valor2;
    $subtotal3 = $cantidad3 * $valor3;

    $Tsubtotal = $subtotal1 + $subtotal2 + $subtotal3;
    $iva = $Tsubtotal * 0.19;
    $total = $Tsubtotal + $iva;

    echo "<br><br>";
    echo "Drogueria el dolor <br><br>";
    echo "Cliente ID: " . $id . "<br><br>";
    echo "Cliente: " . $cliente . "<br><br>";
    echo "Medicina 1: " . $medicina1 . "<br><br>";
    echo "Cantidad: " . $cantidad1 . "<br><br>";
    echo "Valor Unitario: " . $valor1 . "<br><br>";
    echo "Subtotal Medicina1: " . $subtotal1 . "<br><br>";
    echo "Medicina 1: " . $medicina2 . "<br><br>";
    echo "Cantidad: " . $cantidad2 . "<br><br>";
    echo "Valor Unitario: " . $valor2 . "<br><br>";
    echo "Subtotal Medicina1: " . $subtotal2 . "<br><br>";
    echo "Medicina 1: " . $medicina3 . "<br><br>";
    echo "Cantidad: " . $cantidad3 . "<br><br>";
    echo "Valor Unitario: " . $valor3 . "<br><br>";
    echo "Subtotal Medicina1: " . $subtotal3 . "<br><br>";
    echo "Total a pagar: " . $total . "<br><br>";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th><?php echo "ID" ;?></th>
            <th><?php echo "Cliente" ;?></th>
        </tr>
        <tr>
            <th><?php echo $id = $_POST["id"];?></th>
            <th><?php echo $cliente = $_POST["cliente"];?></th>
        </tr>
        <tr>
            <th><?php echo "Medicina" ;?></th>
            <th><?php echo "Cantidad" ;?></th>
            <th><?php echo "Valor" ;?></th>
            <th><?php echo "Subtotal" ;?></th>
        </tr>
        <tr>
            <th><?php echo $medicina1 = $_POST["m1"];;?></th>
            <th><?php echo $cantidad1 = $_POST["c1"];?></th>
            <th><?php echo $valor1 = $_POST["v1"];?></th>
            <th><?php echo $subtotal1 = $cantidad1 * $valor1;?></th>
        </tr>
        <tr>
            <th><?php echo $medicina2 = $_POST["m2"];;?></th>
            <th><?php echo $cantidad2 = $_POST["c2"];?></th>
            <th><?php echo $valor2 = $_POST["v2"];?></th>
            <th><?php echo $subtotal2 = $cantidad2 * $valor2;?></th>
        </tr>
        <tr>
            <th><?php echo $medicina3 = $_POST["m3"];;?></th>
            <th><?php echo $cantidad3 = $_POST["c3"];?></th>
            <th><?php echo $valor3 = $_POST["v3"];?></th>
            <th><?php echo $subtotal3 = $cantidad3 * $valor3;?></th>
        </tr>
        <tr>
            <th><?php echo "Total";?></th>
            <th><?php 
            $Tsubtotal = $subtotal1 + $subtotal2 + $subtotal3;
            $iva = $Tsubtotal * 0.19;
            echo $total = $Tsubtotal + $iva;?></th>
        </tr>
    </table>
</body>
</html>
