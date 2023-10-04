<?php
require_once('cuenta.php');


class Corriente extends Cuenta{
    private string $num_chaquera;
    private string $fecha_imision_chequera;
    public function __construct($num_cuenta,$saldo_pesos,$saldo_dolares,string $num_chaquera,string $fecha_imision_chequera)
    {
        parent::__construct($num_cuenta,$saldo_pesos,$saldo_dolares);
        /*
        $this->num_cuenta=$num_cuenta;
        $this->saldo_pesos=$saldo_pesos;
        $this->saldo_dolares=$saldo_dolares;
        */
        $this->num_chaquera=$num_chaquera;
        $this->fecha_imision_chequera=$fecha_imision_chequera;

        
    }
    public function getNum_che(){
        return $this->num_chaquera;
        
    }
    public function getFecha_emi(){
        return $this->fecha_imision_chequera;
        
    }

    public function mostrar_datos()
    {
        echo 'Datos de cuenta Corriente'.'<br>'.
        'Numero de cuenta'.$this->getNum().'<br>'.
        'Saldo en pesos'.$this->getPesos().'<br>'.
        'Saldo en dolares'.$this->getDolares().'<br>'.
        'Numero de chquera'.$this->num_chaquera.'<br>'.
        'Fecha de emision '.$this->fecha_imision_chequera.'<br>';

    }
}
////////////////////////////////////////////////////CORRENTE/////////////////////////////////////////////

/*
class Ahorro extends Cuenta{
    private string $sucursal_apertura;
    private string $fecha_apertura;
    private float $tasa_interes;

    public function __construct($num_cuenta,$saldo_pesos,$saldo_dolares,string $sucursal_apertura,string $fecha_apertura,float $tasa_interes)
    {
        parent::__construct($num_cuenta,$saldo_pesos,$saldo_dolares);

        $this->num_cuenta=$num_cuenta;
        $this->saldo_pesos=$saldo_pesos;
        $this->saldo_dolares=$saldo_dolares;
        
        $this->sucursal_apertura=$sucursal_apertura;
        $this->fecha_apertura=$fecha_apertura;
        $this->tasa_interes=$tasa_interes;
        
    }
    public function getSucursal(){
        return $this->sucursal_apertura;
        
    }
    public function getFecha(){
        return $this->fecha_apertura;
        
    }
    public function getTasa(){
        return $this->tasa_interes;
        
    }

    public function mostrar_datos()
    {
        echo 'Datos de cuenta Ahorros'.'<br>'.'Numero de cuenta'.$this->getNum().'<br>'.
        'Saldo en pesos'.$this->getPesos().'<br>'.
        'Saldo en dolares'.$this->getDolares().'<br>'.
        'Sucursal de apertura'.$this->sucursal_apertura.'<br>'.
        'Fecha de apertura'.$this->fecha_apertura.'<br>'.
        'Tasa de interes'.$this->tasa_interes.'<br>';

    }
}*/

$corriente=new Corriente('123',123,2.3,'123','12/12/2022');
//$corriente->mostrar_datos();

?>