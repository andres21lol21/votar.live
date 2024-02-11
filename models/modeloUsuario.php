<?php

class usuario{
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $telefono;
    private $correo;
    private $contraseña;
    

    function __construct($nombre,$apellido,$fechaNacimiento,$telefono
    ,$correo,$contraseña) {
        $this ->nombre=$nombre;
        $this ->apellido=$apellido;
        $this ->fechaNacimiento=$fechaNacimiento;
        $this ->telefono=$telefono;
        $this ->correo=$correo;
        $this ->contraseña=$contraseña;
        

    }
    function getNombre(){
        return $this ->nombre;
    }
    function getApellido(){
        return $this ->apellido;
    }

    function getFechaNac(){
        return $this ->fechaNacimiento;
    }

    function getTelefono(){
        return $this ->telefono;
    }

    function getCorreo(){
        return $this ->correo;
    }

    function getContraseña(){
        return $this ->contraseña;
    }






}




?>