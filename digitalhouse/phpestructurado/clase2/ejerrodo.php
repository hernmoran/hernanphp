<?php


$dia=3;
$dias= ["Lunes", "Martes", "Miercoles", "Juesves", "Viernes", "Sabado", "Domingo" ];
$evaluacion= 1;
$evaluaciones= [ "Regular", "Bueno", "Excelente"];
$porcentaje= [ 10 , 30 , 30];
$porcentajingreso= 0;
$nombre="Daniel";
$apellido="Fuentes";
$sueldo= 8000;
$dni= 1324567;

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
    $sueldo
}



 echo"Estimdos(a) $nombre  $apellido , portador del DNI: $dni , le informamos que el dia de hoy: $dias[$dia] , de acuerdo al nivel de evaluacion obtenido:  $evaluaciones[$evaluacion] , usted ha recivido un aumento del  $porcentaje , siendo su aumento de: ";


?>
