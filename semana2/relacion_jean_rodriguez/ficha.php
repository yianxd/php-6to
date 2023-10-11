<?php

class Ficha{

    private string $codigoFicha;
    private array $aprendices;

    public function __construct(string $codigoFicha)
    {
        $this->codigoFicha=$codigoFicha;
        $this->aprendices=array();
    }

    public function agregarAprendiz($aprendiz){
            array_push($this->aprendices,$aprendiz);
    }
    
    public function getAprendices(){
        return $this->aprendices;
    }
    public function getCodigo(){
        return $this->codigoFicha;
    }
}





/*
$ficha1->agregarAprendiz('ola');

foreach ( $ficha1->getAprendices() as &$aprendiz){
    echo $aprendiz;
}*/





?>