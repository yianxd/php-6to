<?php
//require('corriente.php');
//include 'ahorros.php';
require('corriente.php');
require('ahorros.php');

$corriente=new Corriente('123',123,2.3,'123','12/12/2022');
$corriente->mostrar_datos();
$ahorros=new Ahorro('123',1323,3.4,'a','2/12/2012',123.2);
$ahorros->mostrar_datos()
?>