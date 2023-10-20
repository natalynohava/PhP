<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once("plantilla/libreria.php");
    proceso();
}else{
    include_once("plantilla/inicio.php");
    include_once("plantilla/drogueria.php");
    include_once("plantilla/final.php");
}

?>
