<?php
/*$a =200;
$b = 20;
if  ($a == $b){
    echo "True";
}
else {
    echo "Es Falso";
  
}
*/
//Termario
//echo $a == $b ? "Es igual " : "No es igual";

//Fusion
//echo $a ?? $b ?? "No existe";
//Operador de ejecucion
//echo `dir`;
/*$a =10;
$b =20;
while ($a < 10){
    echo $a. "<br>";
    $a++;
}

if ($a==15 || $b==25){
    echo "Correcto";
}else{
    echo "Incorrecto";
} 

//Concatenar 
$uno = "UNO";
$dos = "DOS";
$tres = "TRES";
echo "<br>".$uno. $dos .$tres; 
  */

$a=""; 
//isset si existe la variable y  empty si esta vacia
if (isset($a) && !empty($a))
{
    echo "Es igual";
}

$b=200; 
//isset si existe la variable y  empty si esta vacia
/*if ($b ==100)
{
    echo "Es igual";
}else 
{
    echo "NO es igual";
}*/
/*$c=42;
if ($c==1)
{
    echo "Es uno";
}elseif($c==2){
    echo "Es dos";
}elseif ($c==3){
    echo "Es tres";
}elseif ($c==4){
    echo "Es cuatro";
}else{
    echo "No es ninguno de los anteriores";
}
*/
//switch

/*$d =8;
switch ($d){
    case 1 : echo "es uno"; break;
    case 2 : echo "es dos"; break;
    case 3 : echo "es tres";break;
    default: echo "NO es ninguno";break;
        
}*/
$z =10;
?>
<table border="1">
    <tr>
        <td>Numero</td>
    </tr>

<?php
while ($z < 20){
    echo "<tr><td>Tu variables es $z Menor a 20</td></tr>";
    $z++;
}
?>
</table>



