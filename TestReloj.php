<?php
include "Reloj.php";
$test_reloj = new Reloj(23, 10, 10);
$test_reloj -> incremento();
echo $test_reloj -> __toString();

?>