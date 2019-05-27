<?php
$sever='localhost';
$user='alan';
$pass='2812';
$base='tienda';
$conex = mysqli_connect($sever,$user,$pass,$base);
if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}else{

    //echo 'conexion relizada';    

}
?>