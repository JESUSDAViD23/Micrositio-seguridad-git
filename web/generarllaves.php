<?php

function generar($llave){
$configarg = array(
    "config" => "C:/xampp/php/extras/openssl/openssl.cnf",
    'private_key_bits'=> 2048,
    'default_md'=> "sha256"
);

$generar = openssl_pkey_new($configarg);

openssl_pkey_export($generar,$keypriv,NULL,$configarg);

$keypub = openssl_pkey_get_details($generar);

file_put_contents($llave.'privada.key',$keypriv);
file_put_contents($llave.'publica.key',$keypub['key']);
return true;
}
?> 
