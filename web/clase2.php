<?php
$semana = array("LUNES","MARTES",
                "MIERCOLES","JUEVES","VIERNES");
?>

   <table border = "1">
    <tr>
        <td> Indicie</td>
        <td>Concepto</td>
    </tr>
<?php
foreach  ($semana as $var => $var2)
{
   
    echo "<tr>";
    echo "<td>$var </td>";
    echo "<td>$var2 </td>";
    
    
    echo "</tr>";
    
    
}
?> 
</table>