<?php
session_start();
echo $_SESSION['nombre']."<br>";
echo $_SESSION['pais'];



//session_start iniciar secion
//vaciar
session_unset();
session_destroy();
?>