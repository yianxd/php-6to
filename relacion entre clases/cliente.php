<?php


class Persona{
    private $metodo;

    public function __construct(){
        $this->metodo =[];

    }
    public function getNombre(){
        return $this->nombre;
    }
}

$p1 = new Persona();
//echo $p1->getNombre();
//$p1->saludo();


?>