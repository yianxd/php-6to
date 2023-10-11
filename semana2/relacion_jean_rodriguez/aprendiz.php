<?php

class Aprendiz{
    private string $idAprendiz;
    private string $nombres;
    private string $apellidos;
    private string $correo;

    public function __construct(string $idAprendiz, string $nombres,string $apellidos,string $correo)
    {
     $this->idAprendiz=$idAprendiz;
     $this->nombres=$nombres;
     $this->apellidos=$apellidos;
     $this->correo=$correo;
    }

    public function getNombre(){
        return $this->nombres;
    }
}



?>