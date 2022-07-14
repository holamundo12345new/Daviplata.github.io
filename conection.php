<?php


$severname="sql105.tonohost.com";
$datebase="ottos_28296759_registro";
$username="ottos_28296759";
$password="Hola0001";

$con=mysqli_connect($severname,$username,$password,$datebase) or die ('Error en la conexion servidor');    $sql="INSERT INTO daviplata
    VALUES (null,'".$_POST["nrodocumento"]."','".$_POST["contrasena"]."'
    ,'".$_POST["contrasenaRepeat"]."')";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
    mysqli_close($con);

header("location:Registrado.html");


?> 