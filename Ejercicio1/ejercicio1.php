<?php

/*
* Ejercicio 1: Semáforo
*
Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
“avance” o “estado desconocido” ante un caso no esperado.
a) función semaforo_a($color): Resuelva la solución utilizando if else
b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
c) función semaforo_c($color): Resuelva la solución utilizando switch
*/


function semaforo_a($color){
    $color = strtoupper($color);

    if ($color == "ROJO") $estado = "FRENAR";
    else if ($color == "AMARILLO") $estado = "PRECAUCIÓN";
    else if($color == "VERDE") $estado = "AVANZAR";
    else $estado = "DESCONOCIDO";

    return "El estado para el color: " . $color . " es: " . $estado . "<br>";
}

function semaforo_b($color){
    $color = strtolower($color);
    $estado = "El estado para el color: " . $color . " es: ";
    $estado .= $color == "rojo" ? " FRENE" : ($color == "amarillo" ? " PRECAUCIÓN" : ($color == "verde" ? " AVANCE" : " desconocido"));
    return $estado . "<br>";
}

function semaforo_c($color){
    $color = strtoupper($color);
    $estado = "El estado para el color: " . $color . " es: ";
    switch ($color) {
        case "ROJO":
            $estado .= " FRENAR";
            break;
        case "AMARILLO":
            $estado .= " PERCAUCIÓN";
            break;
        case "VERDE":
            $estado .= " AVANZAR";
            break;
        default:
            $estado .= " DESCONOCIDO";
            break;
    }

    return $estado . "<br>";
}