<?php

/*
 * Ejercicio 5: Sumatoria
Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
valores.
a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while
*/

function sumatoria_a($array){
    $suma = 0;
    $largo = count($array);

    for ($i=0; $i < $largo; $i++){
        $suma += $array[$i];
    }
    return "<br>A - La suma es = " . $suma . "<br>";
}

function sumatoria_b($array){
    $suma = 0;
    foreach($array as $num){
        $suma += $num;
    }
    return "<br>B - La suma es = " . $suma . "<br>";
}

function sumatoria_c($array){
    $suma = 0;
    $tope = sizeof($array);
    $i = 0;
    while($i < $tope){
        $suma += $array[$i];
        $i++;
    }

    return "<br>C - La suma es = " . $suma . "<br>";
}
