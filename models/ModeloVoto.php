<?php

class voto {

    private $idUsuario;

    private $fechaHora;

    private $idCandidato;

    private $eleccion_ideleccion;

    function __construct($idUsuario, $fechaHora, $idCandidato, $eleccion_ideleccion){
        $this -> idUsuario=$idUsuario;
        $this -> fechaHora=$fechaHora;
        $this -> idCandidato=$idCandidato;
        $this -> eleccion_ideleccion= $eleccion_ideleccion;
    }

    function getidUsuario()  {
        return $this -> idUsuario;
    }

    function getfechaHora()  {
        return $this -> fechaHora;
    }

    function getidCandidato()  {
        return $this -> idCandidato;
    }

    function geteleccion_ideleccion()  {
        return $this -> eleccion_ideleccion;
    }


}


?>