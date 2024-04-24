<?php
class candidato {

    private $nombre;

    private $apellido;

    private $edad;

    private $descripcion;

    private $partido;

    function __construct($nombre,$apellido,$edad,$descripcion,$partido){
        $this -> nombre=$nombre;
        $this -> apellido=$apellido;
        $this -> edad=$edad;
        $this -> descripcion=$descripcion;
        $this -> partido=$partido;
    }

    function getNombre(){
        return $this -> nombre;
    }

    function getApellido(){
        return $this -> nombre;
    }

    function getEdad(){
        return $this -> edad;
    }

    function getDescripcion(){
        return $this ->descripcion;
    }

    function getPartido(){
        return $this -> partido;
    }

}

?>