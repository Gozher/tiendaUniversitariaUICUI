<?php

session_start();

include '../conexion/conexion.php';

$user=$_POST['user'];
$pass=$_POST['pass'];
$ban =0;


$consulta = $conex -> query("SELECT * FROM Datos_usuario");

while ($fila = $consulta -> fetch_assoc()) {
  if ($fila['email']==$user && $fila['passw']==$pass )
    {       
      $ban =1;
      $_SESSION['mail']=$fila['email'];
      break;
    }        
}

if($ban==0){
    echo "<script language='JavaScript'>
    alert('Datos erroneos');
    location.href='../login.html';
    </script>";
}else{
  echo "<script language='JavaScript'>
  alert('login exitoso');
  location.href='../index.php';
  </script>";

}
?>