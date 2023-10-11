<?php

$arreglo1=[
    [
        'nombre'=>'manzana',
        'precio'=>'2400',
    ],
    [
        'nombre'=>'naranja',
        'precio'=>'2000',
    ],
    [
        'nombre'=>'pera',
        'precio'=>'1700',
    ]
];

foreach($arreglo1 as &$frutas){
    echo 'nombre: '.$frutas['nombre'].'<br>';
    echo 'precio: '.$frutas['precio'].'<br>';
}

?>