<?php

class Urna{
   
    private $titulo;
    private $descripcion;
    private $fechainicio;
    private $fechaFin;

    function __construct($titulo,$descripcion,$fechainicio,$fechaFin){
        $this -> titulo=$titulo;
        $this -> descripcion=$descripcion;
        $this -> fechainicio=$fechainicio;
        $this -> fechaFin=$fechaFin;
    }

    function getTitulo(){
        return $this ->titulo;
    }
    function getDescripcion(){
        return $this ->descripcion;
    }
    function getFechaInicio(){
        return $this ->fechainicio;
    }
    function getFechaFin(){
        return $this ->fechaFin;
    }
}


?>