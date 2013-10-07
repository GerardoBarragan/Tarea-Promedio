<?php

$numeros=array(70,80,90,60,65,75,85,86,100,100,100,50,78,67,89,90,100);
$suma=0;
for($num=0; $num<=count($numeros)-1; $num++){
             $suma += $numeros[$num];
            }
           


        $promedio= $suma/count($numeros);
        echo 'El Total es: '.$promedio;


?>