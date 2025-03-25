<?php
//Calculadora de operaciones básicas (suma, resta, multiplicación y división)
//voy a implementar solo para dos valores
class calculadora {
    //Defino las dos variables instancia 
    private $num_a;
    private $num_b;
    public function __construct($numA, $numB){
        if (is_numeric($numA) && is_numeric($numB)){
        $this->num_a = $numA;
        $this->num_b = $numB;
        }
        else
            throw new ErrorException ('Los valores ingresados deben ser numéricos.');
    }
    //métodos
    public function getnum_a(){
        return $this->num_a;
    }
    public function getnum_b(){
        return $this->num_b;
    }
    public function setnum_a($numA){
        $this->num_a = $numA;
    }
    public function setnum_b($numB){
        $this->num_b = $numB;
    }
    //suma
    public function sumar(){
        $suma = $this -> getnum_a() + $this -> getnum_b();
        return $suma;
    }
    //resta num_a - num_b
    public function restar(){
        $resta = $this -> getnum_a() - $this -> getnum_b();
        return $resta;
    }
    //multiplicación
    public function multiplicar(){
        $multiplica = $this -> getnum_a() * $this -> getnum_b();
        return $multiplica;
    }
    //división (verifica que num_b no sea cero)
    public function dividir(){
        if ($this -> getnum_b() != 0){
            $divide = $this -> getnum_a() / $this -> getnum_b();
            return $divide;
        }
        else
            throw new Exception('No está definida la división para 0 como divisor.');
    }
    //método __toString
    public function __toString()
    {
        return "Los números ingresados son:\nNúmero A = ".$this -> getnum_a()."\nNúmero B = ".$this -> getnum_b()."\n";
    }
}