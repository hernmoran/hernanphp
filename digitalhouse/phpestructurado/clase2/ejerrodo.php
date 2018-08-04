<?php
$nombre = "Daniel";
$apellido = "Fuentes";
$dni = 1324567;
$sueldo = 8000;
$dia = 6;
$diasdelasemana = ["Lunes", "Martes" ,"Miercoles" ,"Juesves" ,"Viernes" ,"Sabado", "Domingo"];
$calificacion = 0;
$evaluacionestodas = ["Regular", "Bueno", "Excelente"];
$porcentajes = [10,20,30];

if ($calificacion > 2 || $dia  > 6){
    echo "La Evaluacion deve ser: (0) = Regular, (1)= Bueno, (2)= Excelente"."<br>";    echo "Los dias de semana deven estar comprendidos entre 0 y 6"."<br>";

}
    else{
    if($evaluacionestodas[0]==$evaluacionestodas[$calificacion]) {
        $aumento = ($sueldo * $porcentajes[$calificacion])/100;
        $nuevo_sueldo = $aumento + $sueldo;
    
    }elseif($evaluacionestodas[1]==$evaluacionestodas[$calificacion]) {
        $aumento = ($sueldo * $porcentajes[$calificacion])/100;
        $nuevo_sueldo = $aumento + $sueldo;
    
    }elseif($evaluacionestodas[2]==$evaluacionestodas[$calificacion]) {
        $aumento = ($sueldo * $porcentajes[$calificacion])/100;
        $nuevo_sueldo = $aumento + $sueldo;
    }
    }

echo  "Estimdo $nombre  $apellido, portador del DNI: $dni , le informamos que el dia de hoy: $diasdelasemana[$dia], de acuerdo al nivel de evaluacion obtenido: $evaluacionestodas[$calificacion], usted ha recivido un aumento de $aumento , siendo su sueldo un total de: $nuevo_sueldo";
 ?>