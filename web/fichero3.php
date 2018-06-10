<?php


$solicitud = fopen("archvio.txt","r") or die ("NO se pudo leer el mensaje");

while(!feof($solicitud)){
    $leer = fgets($solicitud);
    $ver = nl2br($leer);
    echo $ver;
}

?>