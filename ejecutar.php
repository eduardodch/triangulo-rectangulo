<?php

$base = 3;
$altura = 4;
$hipotenusa = null;

    $hipotenusa = (sqrt(pow($base,2))+(pow($altura,2)));

    echo  'Calculo de la hipotenusa de un triangulo rectangulo', ' <br/><br/><br/>' ;
    echo  'Dada una base de '. $base. ' cm';
    echo  ' y dada una altura de '. $altura. ' cm', '<br/> <br/>';
    echo  'el resultado de nuestra hipotenusa seria '. $hipotenusa;