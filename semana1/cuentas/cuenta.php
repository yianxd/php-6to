<?php

class Cuenta{
    private string $num_cuenta;
    private float $saldo_pesos;
    private float $saldo_dolares;

    public function __construct(string $num_cuenta,float $saldo_pesos,float $saldo_dolares)
    {
        $this->num_cuenta=$num_cuenta;
        $this->saldo_pesos=$saldo_pesos;
        $this->saldo_dolares=$saldo_dolares;
    }

    public function getNum(){
        return $this->num_cuenta;
    }
    public function getPesos(){
        return $this->saldo_pesos;
    }
    public function getDolares(){
        return $this->saldo_dolares;
    }
    public function mostrar_datos(){
        echo 'Datos de cuenta'.'<br>'.'Numero de cuenta'.$this->num_cuenta.'<br>'.'Saldo en pesos'.$this->saldo_pesos.'<br>'.'Saldo en dolares'.$this->saldo_dolares;
    }
}

$ctn1=new Cuenta('1233',1200,3.1);
//$ctn1->mostrar_datos();

?>