<?php 
$host ="localhost";
$user ="root";
$password = "";
$database="votar";

$con = new mysqli($host, $user, $password, $database);
if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



?>