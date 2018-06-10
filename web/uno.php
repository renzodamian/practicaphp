<?php
$user="renzo";
$password="123";
if ($_POST['usuario']==$user && $_POST['pass']==$password) 
{
    session_start();
    $_SESSION['nombre']="Renzo Damian Jaramillo Cueva";
    $_SESSION['pais']="Ecuador";
    // Rara ves se hace esto solo es para ejemplo
    header("location:dos.php");
}else {
    
    echo "User o Pass incorecto";
}
?>