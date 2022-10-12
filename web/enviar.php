<?php
require("conexion.php");
require("AES_cod.php");
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telef'];
$domicilio = $_POST['domic'];
$identificacion =$_POST['ident'];
$contrase =$_POST['contra'];

$domicilio = cifrado($domicilio,$contrase);
$identificacion = cifrado($identificacion,$contrase);
$contra_encript = cifrado($contrase, $contrase);

$sql = "INSERT INTO `aes`(`nombre`, `correo`, `telefono`, `domicilio`, `identificacion`, `passencript`, `contra`) VALUES
 ('$nombre','$email','$telefono','$domicilio','$identificacion','$contra_encript','$contrase')";

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$result = mysqli_query($conn,$sql);
if($result){
    alert("Datos guardados");
    header("Location: http://localhost/micro/AES.php");
}else{
    alert("Datos no guardados");
    header("Location: http://localhost/micro/AES.php");
}

?>
