<?php

/*$pila = array("naranja", "plátano");
array_push($pila, "manzana", "arándano");
print_r($pila);*/

$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;

}


?>