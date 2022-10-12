<?php
require("conexion.php");
require("generarllaves.php");
require("cifrasim_rsa.php");
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telef'];
$domicilio = $_POST['domic'];
$identificacion =$_POST['ident'];
$contrase =$_POST['contra'];

generar($contrase);

$domicilio = encriptar($domicilio,$contrase);
$identificacion = encriptar($identificacion,$contrase);
$contra_encript = encriptar($contrase, $contrase);

$sql = "INSERT INTO `rsa`(`nombre`, `correo`, `telefono`, `domicilio`, `identificacion`, `passencript`, `contra`) VALUES
 ('$nombre','$email','$telefono','$domicilio','$identificacion','$contra_encript','$contrase')";

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$result = mysqli_query($conn,$sql);
if($result){
    alert("Datos guardados");
    header("Location: http://localhost/micro/RSA.php");
}else{
    alert("Datos no guardados");
    header("Location: http://localhost/micro/RSA.php");
}

?>