<?php
/*10.d. Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite
recordar la contraseña ingresada y las ultimas 4 contraseñas utilizadas. Implementar un método que
permita validar una contraseña con la almacenada y un método para cambiar la contraseña actual por otra
nueva, el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es
decir no se encuentra dentro de las cuatro almacenadas). Implementar el método recordar que dado el
usuario, muestra la frase que permite recordar su contraseña.*/

class Login {
    //Variables instancia
    private $nombreUsuario;
    private $contrasena;
    private $frase;

    //Metodos
    public function __construct($usuario, $contrasena, $frase)
    {
        $this -> nombreUsuario = $usuario;
        $this -> contrasena = $contrasena;
        $this -> frase = $frase;
    }

    public function getNombreUsuario (){
        return $this -> nombreUsuario;
    }
    public function setNombreUsuario($usuario){
        $this -> nombreUsuario = $usuario;
    }

    public function getContrasena (){
        return $this -> contrasena;
    }
    public function setContrasena ($contrasena){
        $this -> contrasena = $contrasena;
    }

    public function getFrase (){
        return $this -> frase;
    }
    public function setFrase ($frase){
        $this -> frase = $frase;
    }

    public function contraActual (){
        //funcion que arma un arreglo con los datos de usuario actual
        $contraActual = [$this -> getContrasena(), $this -> getFrase()];
        return $contraActual;
    }

    public function almacenaContra (){
        array_push($almacenaContra, $this -> contraActual());
        if (count($almacenaContra) > 4){
            array_shift($almacenaContra);
        }
        return $almacenaContra;
    }

    
}
?>