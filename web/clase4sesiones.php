<?php  
//session_start();
//$_SESSION['nombre']="Renzo Jaramillo";
// Saber el id de la session
//echo "Su identificador de la sesion es:".session_id()."<br>";

?>
<!DOCTYPE html>
<html>
    <head>
        <tittle>
            
        </tittle>
    </head>
    <body>
        <form method="post" action="uno.php">
            Nombre <input type="text" name="usuario"> <br>
            Pass   <input type="password" name="pass"> <br>
            <input type="submit" name="enviar">
         </form>
    </body>
</html>