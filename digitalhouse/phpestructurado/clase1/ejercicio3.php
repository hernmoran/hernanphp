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









?>