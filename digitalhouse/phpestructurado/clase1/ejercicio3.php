<?php

$variable01 = true;

$variable02 = false;

$variable03 = 0;

$variable04 = 1;

$variable05 = 6;

$variable06 = '';

$variable07 = "3";

$variable08 = "true";

$variable09 = 'false';

$variable10 = null;

function tipoDato($varN)
{
    if ( $varN == true )
    {
        echo 'el valor' . $varN . 'es verdadero.';
    }
    else
    {
        echo 'el valor' . $varN . 'es falso.';
    }
}

tipoDato($variable10);

$miarray = ["Oso", "elefante", "tortuga", "leon", "tiburon", "paloma", "caballo"];
$miarray[100] = "mono";
$miarray[16] = "Gato";
echo "Me gustan los animales". " ".  $miarray[0]. " ". $miarray[1]. " ". $miarray[2]. " ".  $miarray[3]. " ". $miarray[4]. " ". $miarray[5]. " ".  $miarray[6]. " ". $miarray[7]. " ". $miarray[100]. " ". $miarray[16];

var_dump ($miarray);

echo "<br>";
echo "<br>";
echo "<br>";
$valor1 = 33;
$valor2 = 2;
$valor3 = $valor1 + $valor2;
echo $valor3;
echo "<br>";

$hernan = [];
$hernan = [];
$hernan[0] = [];
$hernan[1] = "Hola";

$hernan[0][]= "Chau";
var_dump ($hernan);


echo "<br>";
$dia=3;
$dia= ["Lunes", "Martes", "Miercoles", "Juesves", "Viernes", "Sabado", "Domingo" ];
$evaluaciones= 1;
$evaluaciones= [ "Regular", "Bueno", "Excelente"];
$porcentaje= [ 10 , 30 , 30];
$porcentajingreso= 0;
$nombre="Daniel";
$apellido="Fuentes";
$sueldo= 8000;
$dni="";

if ($evaluaciones[0]){
    $porcentajecero=$porcentaje[0];
}
    
    elseif ($evaluaciones[1]){
    $porcentajeingreso=$porcentaje[1];
}


    elseif ($evaluaciones[2]){
    $porcentajeingreso=$porcentaje[2];
}

if ($porcentajeingreso == $porcentaje[0]){
    $sueldo; 
}



 echo "Estimdos(a) ". $nombre. " ". $apellido. ", portador del DNI: ". $dni. ", le informamos que el dia de hoy: ". $dia. ", de acuerdo al nivel de evaluacion obtenido: ". $evaluaciones. ", usted ha recivido un aumento del ". $porcentaje. ", siendo su aumento de: " ;


 
 $nombre = “Juan”; $apellido = “Perez”; $casado = false; $edad = 35;
 echo $nombre;
 var_dump($apellido);

?>