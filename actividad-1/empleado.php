<?php

require('persona.php');

class Empleado extends Persona{
    private string $cargo;
    private float $salario;

    public function __construct($nombre,$apellido,$genero,string $cargo, float $salario)
    {
        parent::__construct($nombre,$apellido,$genero);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setCargo($cargo){
        $this->cargo=$cargo;
    }
    public function setSalario($salario){
        $this->salario=$salario;
    }


}

$empl1 = new Empleado('a','a','a','cargo1',100);
//echo $empl1->getNombre();
?>