<?php
$sever='localhost';
$user='root';
$pass='';
$base='tiendaUniversitaria';
$conex = mysqli_connect($sever,$user,$pass,$base);
if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo 'conexion relizada';
}
?>