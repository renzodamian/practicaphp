<?php

$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$solicitud = fopen("archvio.txt","a") or die ("NO se pudo abrir el mensaje");

fwrite($solicitud,"Asunto :");
fwrite($solicitud,"\r\n");
fwrite($solicitud,$asunto);
fwrite($solicitud,"\r\n");
fwrite($solicitud,"Mensaje :");
fwrite($solicitud,$mensaje);
fclose($solicitud);
echo"SE CERRO CORECTAMENTE EL ARCHIVO";

?>