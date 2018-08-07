<?php
//definiendo variables//
$nombre = "Daniel";
$apellido = "Fuentes";
$dni = 1324567;
$dia = 3;
$monto = 60000;
$cuotas = 10;
$tasa = 10;
$monto_deuda = ($monto * $tasa)/100 + $monto;
$monto_cuota = [];

switch ($dia) {
    case 1: 
    $dia = "Lunes";
    break;

    case 2:
    $dia = "Martes";
    break;

    case 3:
    $dia = "Miercoles";
    break;
    
    case 4:
    $dia = "Jueves";
    break;

    case 5:
    $dia = "Viernes";
    break;

    case 6:
    $dia = "Sabado";
    break;

    case 7:
    $dia = "Domingo";
    exit;

    default:
    echo "El dia ingresado no es valido; break";
    }

    if($tasa !=5 && $tasa !=10 && $tasa != 15 && $tasa != 20){
        echo "El valor de las tasas deven ser 5, 10, 15 o 20 <br>";
    
        exit;

    }

    if ($monto < 1000 && $monto > 7200){
        echo "El monto del Credito a solicitar deve ser de entre 1000 a 7200 <br>";
        exit;
    }
    
    if ($cuotas < 3 || $cuotas > 36){
        echo "Las cuotas deven ser de entre 3 a 36 <br>";
        exit;
    }



echo  "<h2>Estimado $nombre  $apellido, portador del DNI: $dni , le informamos que el dia de hoy: $dia, se le aprobo el credito de: $monto a una tasa del: $tasa , usted de debe cancelar un total de pesos $monto_deuda, a razon de: $cuotas cuotas, y el valor de cada una de ellas es de: $valor_cuota</h2>";


for($i = 1 ; $i <= $cuotas; $i ++){
    $monto_cuota[$i] = $monto_deuda / $cuotas;

}
foreach ($monto_cuota as $indice => $value) {
    echo "Nro. de la cuota $i, valor cuota:$value <br> <hr>"; 
}


 ?>