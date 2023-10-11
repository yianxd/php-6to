<?php
require_once('ficha.php');
require_once('aprendiz.php');
require_once('programa.php');

//programas
/*
$pgm1= new Programa('218120','ADSO');
$pgm1= new Programa('212346','ADSI');*/


//aprendices

$ap1 = new Aprendiz("1", "Juan", "Pérez", "juanperez@example.com");
$ap2 = new Aprendiz("2", "María", "González", "mariagonzalez@example.com");
$ap3 = new Aprendiz("3", "Carlos", "López", "carloslopez@example.com");
$ap4 = new Aprendiz("4", "Luisa", "Martínez", "luisamartinez@example.com");
$ap5 = new Aprendiz("5", "Pedro", "Sánchez", "pedrosanchez@example.com");
$ap6 = new Aprendiz("6", "Ana", "Ramírez", "anaramirez@example.com");
$ap7 = new Aprendiz("7", "Miguel", "Torres", "migueltorres@example.com");
$ap8 = new Aprendiz("8", "Isabel", "Díaz", "isabeldiaz@example.com");
$ap9 = new Aprendiz("9", "Javier", "Fernández", "javierfernandez@example.com");
$ap10 = new Aprendiz("10", "Laura", "Gómez", "lauragomez@example.com");
$ap11 = new Aprendiz("11", "Raúl", "Hernández", "raulhernandez@example.com");
$ap12 = new Aprendiz("12", "Sofía", "Luna", "sofialuna@example.com");
$ap13 = new Aprendiz("13", "Diego", "Ortega", "diegoortega@example.com");
$ap14 = new Aprendiz("14", "Elena", "Paredes", "elenaparedes@example.com");
$ap15 = new Aprendiz("15", "Gabriel", "Reyes", "gabrielreyes@example.com");

//print_r($ap15)

//fichas
$ficha1= new Ficha('2560664');
$ficha2= new Ficha('2206662');
$ficha3= new Ficha('2566201');
$ficha4= new Ficha('2350661');
$ficha5= new Ficha('2720665');


$ficha1->agregarAprendiz($ap1);
$ficha1->agregarAprendiz($ap2);
$ficha1->agregarAprendiz($ap3);
///
$ficha2->agregarAprendiz($ap4);
$ficha2->agregarAprendiz($ap5);
$ficha2->agregarAprendiz($ap6);
//////
$ficha3->agregarAprendiz($ap7);
$ficha3->agregarAprendiz($ap8);
$ficha3->agregarAprendiz($ap9);
////
$ficha4->agregarAprendiz($ap10);
$ficha4->agregarAprendiz($ap11);
$ficha4->agregarAprendiz($ap12);
////
$ficha5->agregarAprendiz($ap13);
$ficha5->agregarAprendiz($ap14);
$ficha5->agregarAprendiz($ap15);

//echo is_array($ficha1->getAprendices());

foreach($ficha1->getAprendices() as &$aprendiz){
    echo $aprendiz->getNombre().'<br>';
}
?>