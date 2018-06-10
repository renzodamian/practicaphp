<?php
//primera forma de declara un array
/*$dia[]= "LUNES";
$dia[]= "MARTES";
$dia[]= "MIERCOLES";
$dia[]= "JUEVES";
$dia[]= "VIERNES";*/
//Otra forma de arreglar array
//$semana = array ("LUNES","MARTES","MIERCOLES","JUEVES","VIERNES");

//
//Otra maner
$semana =["LUNES","MARTES","MIERCOLES","JUEVES","VIERNES"];
$array = [
    [
        [10,20,30,40,50],
        [60,70,80],
        [90,95,96,97,98],
    ],
    [100,200,300,400,500],
    ["Gato","Raton","Perro","Toro","Loro"]
];
echo $semana[2]."<br>";
echo $array [0][2][2];
?>