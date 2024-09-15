<?php

/*
Ejercicio 2: Binomio cuadrado perfecto
Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)(cuadrado)   
a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
potencia
b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
desarrollada del binomio: a(cuadrado) + 2*a*b + b(cuadrado)
*/


function binomioCuadradoPerfecto_a($a, $b){
    $resultado = ($a + $b) * ($a + $b); // tambien podria haber usado el pow(base,exponente) -> pow(a+b, 2)
    return "El resultado del binomio cuadrado perfecto para A= " . $a . " y para B= " . $b . " es = " . $resultado . "<br>";
}

function binomioCuadradoPerfecto_b($a, $b){
    $resultado = $a**2 + 2*$a*$b + $b**2;
    return "El resultado del binomio cuadrado perfecto para A= " . $a . " y para B= " . $b . " es = " . $resultado . "<br>";
}