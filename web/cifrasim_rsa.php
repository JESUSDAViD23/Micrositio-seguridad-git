<?php

//$datos = "AiNA THE END Besto Wafle";
//echo "<br/> El texto a cifrar es ".$datos. "<br/>";
function encriptar ($datos,$llave){
$keypublica = openssl_pkey_get_public(file_get_contents($llave.'publica.key'));

openssl_public_encrypt($datos, $datos_cifrados, $keypublica);
//echo "Los datos cifrados son". $datos_cifrados. "<br/>";
$dato =  base64_encode($datos_cifrados);
return $dato;
}

function desencriptar($datos_cifrados,$llave){
$keyprivada = openssl_pkey_get_private(file_get_contents($llave.'privada.key'));
$datos_cifrados2 = base64_decode($datos_cifrados);
openssl_private_decrypt($datos_cifrados2, $datos_decifrados,$keyprivada);
return $datos_decifrados;
}
//$data =  encriptar("San Benito #34","AYUNI");
//echo $data;
//echo "<br/>";
//echo desencriptar("gyWMt+5RmCv+qh0izMreCqztm49CT5p06bJ5OBULC69zYzuD9oetZCd4gWYiWLKbUYUSupwZSxq5zr6qaaxps16/7feXUOkbcQR45Af+WJ8uHttccyKiINpzfzsqcZovo+5ySNnQymygQZUeVgfnq3q7oyltncc9NASQYRMtDNgpgw0RIGtyk4wqmhKSTvMw8c3GXzbxFyE9Ws+td9IDdVZdQ9vUOss5Az7+6h7DNp1aOXDiwAYF2Fz+e0oWbnc","AYUNI");