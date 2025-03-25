<?php 
include_once "Fecha.php";
$test_fecha = new Fecha(27, 2, 2023);
$test_fecha -> incremento(365);
echo $test_fecha;

?>

?>