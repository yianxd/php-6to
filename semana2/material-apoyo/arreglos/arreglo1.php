<?php
//Arreglos indexeados porque tienen un indice que inicia en 0
$arreglo1 = array('Colombia', 'Venezuela', 'Ecuador', 'Panamá', 'México', 'Bolivia', 'Costa Rica');

$arreglo2 = ['Suecia', 'Perú', 'Francia', False, 90.5];
$arreglo3 = array(
    $nombre = 'Juan',
    $apellido = 'Rodriguez',
    $correo = 'juan@sena'
);
//arreglo asociativo que no tiene indice.Se puede llamar a traves de una key

//Arreglo asociativo, tienen una clave y valor. Se accede a las posiciones através de su clave
$arreglo4 = array(
    'nombre' => 'Ernesto',
    'apellido' => 'Lopez',
    'correo' => 'ernesto@sena'
);

$personas=array(
    'nombre' =>'Juan Pablo',
    'apellido' => 'Guevara',
    'ubicacion'=>[
        'pais'=>'colombia'
    ]
);
echo 'Arreglo1'.'<br>';
foreach($arreglo1 as $p)
    echo $p.'<br>';

echo 'Arreglo2'.'<br>';
foreach($arreglo2 as $p)
    echo $p.'<br>';

echo 'Arreglo3'.'<br>';
foreach($arreglo3 as $p)
    echo $p.'<br>';

echo 'Arreglo 4 es asociativo'.'<br>';
foreach($arreglo4 as $p)
    echo $p.'<br>';

echo '<pre>';
var_dump($personas);
echo '</pre>';

print_r($personas);