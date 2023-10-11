<?php


class Persona{
    private string $nombre;
    private string $apellido;
    private string $genero;

    public function __construct(string $nombre,string $apellido, string $genero){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->genero = $genero;

    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setGenero($genero){
        $this->genero=$genero;
    }
    

    public function saludo(){
        echo "aaaaaa {$this->nombre}";
    }
}

$p1 = new Persona('nombre1','apellido1','M');
//echo $p1->getNombre();
//$p1->saludo();


?>