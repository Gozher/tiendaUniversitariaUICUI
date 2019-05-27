<?php
    include '../conexion/conexion.php';

    $nom=$_POST['nombre'];
    $apeP=$_POST['apeP'];
    $apeM=$_POST['apeM'];
    $tipoUser=$_POST['tipoUser'];
    $no=$_POST['numCasa'];
    $calle=$_POST['calle'];
    $colonia=$_POST['colonia'];
    $cp=$_POST['CP'];
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];

    $insertar = $conex -> query("INSERT INTO Datos_usuario (id_user,Nombre,ApellidoPaterno,ApellidoMaterno,TipoUsuario,NumeroCasa,Calle,Colonia,Cp,email,passw) 
    VALUES 
    (NULL,'$nom','$apeP','$apeM','$tipoUser','$no','$calle','$colonia','$cp','$mail','$pass')");

if($insertar){
    echo "<script language='JavaScript'>
    alert('se guardo corectamente');
    location.href='../index.php';
    </script>";

    }else{    
    echo "error:" .$conex->error;
    }

    
    
    mysqli_close($conex);

?>