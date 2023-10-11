<?php

class Programa{

    private string $codigoPrograma;
    private string $nombrePrograma;
    

    public function __construct(string $codigoPrograma,string $nombrePrograma)
    {
        $this->codigoPrograma=$codigoPrograma;
        $this->nombrePrograma=$nombrePrograma;
    }
}

?>