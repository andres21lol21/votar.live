<?php
class candidato {

    private $nombre;

    private $apellido;

    private $edad;

    private $descripcion;

    private $partido;

    private $urna;


    function __construct($nombre,$apellido,$edad,$descripcion,$partido,$urna){
        $this -> nombre=$nombre;
        $this -> apellido=$apellido;
        $this -> edad=$edad;
        $this -> descripcion=$descripcion;
        $this -> partido=$partido;
        $this -> urna=$urna;
    }

    function getNombre(){
        return $this -> nombre;
    }

    function getApellido(){
        return $this -> apellido;
    }

    function getEdad(){
        return $this -> edad;
    }

    function getDescripcion(){
        return $this -> descripcion;
    }

    function getPartido(){
        return $this -> partido;
    }

    function getUrna(){
        return $this -> urna;
    }

}

?>