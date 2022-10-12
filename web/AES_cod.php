<?php

function cifrado($mensaje, $llave){
    $inivec = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    $menj_encriptado = openssl_encrypt($mensaje, "AES-256-CBC",$llave,0,$inivec);
    return base64_encode($menj_encriptado."::".$inivec);
}

function decifrar($mensaje, $llave){
    list($datos_encriptados, $inivec) = explode('::',base64_decode($mensaje),2);

    return openssl_decrypt($datos_encriptados,'AES-256-CBC',$llave,0,$inivec);
}
/*
$llave = "ayuni_d";

echo "El valor de la llave es: ".$llave."<br/><br/>";

$mensaje_cifrar = "Ayuni d besto wafle";

$mensaje_cifrado = cifrado($mensaje_cifrar, $llave);
echo "El mensaje cifrado es: ".$mensaje_cifrado."<br/><br/>";

$mensaje_decifrado = decifrar($mensaje_cifrado,$llave);
echo "El mensaje decifrado es: " .$mensaje_decifrado;
*/
?>