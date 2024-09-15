<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>Ejercicios de la guia</h1>
</body>
</html>-->






<?php



// este archivo lo habia hecho al comenzar con los ejercicios para ir haciendo pruebas, pero despues cuando llegue al ej 8, le hice
// un index.php a cada ejercicio para que se vea con los estilos y demas
require_once("Ejercicio1/ejercicio1.php");

echo "EJERCICIO 1: SEMAFORO";

echo "<br>A <br>";
echo semaforo_a("rojo");
echo semaforo_a("veRDe");
echo semaforo_a("AmarilLo");
echo semaforo_a("Azul");

echo "<br>B <br>";
echo semaforo_b("rosa");
echo semaforo_b("amarillo");
echo semaforo_b("rojo");
echo semaforo_b("veRDe");

echo "<br> C <br>";
echo semaforo_c("rosa");
echo semaforo_c("amarillo");
echo semaforo_c("rojo");
echo semaforo_c("veRDe");



require_once("Ejercicio2/ejercicio2.php");

echo "<br>EJERCICIO 2: BINOMIO CUADRADO PERFECTO";

echo "<br>A <br>";
echo binomioCuadradoPerfecto_a(2,3);
echo binomioCuadradoPerfecto_a(10,7);
echo "<br>B <br>";
echo binomioCuadradoPerfecto_b(2,3);
echo binomioCuadradoPerfecto_b(8,16);




require_once("Ejercicio3/ejercicio3.php");

echo "<br>EJERCICIO 3: CONCATENAR TEXTOS<br>";
echo concatenar("Hola", "mundo");
echo concatenar("Pruebo", "concatenar");
echo concatenar("Programación", "web");




require_once("Ejercicio4/ejercicio4.php");

echo "<br>EJERCICIO 4: INCREMENTAR<br>";
$valor = 10;
echo "El valor de la variable es ANTES de llamar a incrementar() es = " . $valor;
incrementar($valor);
echo "<br> El valor de la variable es DESPUES de llamar a incrementar() es = " . $valor . "<br>";

$otroValor = 2;
echo "<br> El valor de la variable es ANTES de llamar a incrementar() es = " . $otroValor;
incrementar($otroValor);
echo "<br> El valor de la variable es DESPUES de llamar a incrementar() es = " . $otroValor . "<br>";





require_once("Ejercicio5/ejercicio5.php");

echo "<br>EJERCICIO 5: SUMATORIA<br>";

// el array se declara asi, y NO asi array[] = [1,2,3] pq ahi seria un bidimensional
// y en la poscicion 1,hay una array [1,2,3]
$array = [1,5,8,4,6];

echo sumatoria_a($array);
echo sumatoria_b($array);
echo sumatoria_c($array);


require_once "Ejercicio6/ejercicio6.php";

echo "<br>EJERCICIO 6: NOMBRE COMPLETO<br>";

$horario_1 = "09hs";
$horario_2 = "15hs";
$horario_3 = "01hs";

$persona = new Saludar("Julian", "Schmuker");
echo "Horario: " . $horario_1 . " - Saludo FORMAL: " . $persona->saludoFormal($horario_1);
echo "<br> Horario: " . $horario_1 . " - Saludo INFORMAL: " . $persona->saludoInFormal($horario_1) . "<br>";

$persona->setNombre("German");
$persona->setApellido("López");
echo "<br> Horario: " . $horario_2 . " - Saludo FORMAL: " . $persona->saludoFormal($horario_2);
echo "<br> Horario: " . $horario_2 . " - Saludo INFORMAL: " . $persona->saludoInFormal($horario_2) . "<br>";

$persona->setNombre("Telma");
$persona->setApellido("Rodriguez");
echo "<br> Horario: " . $horario_3 . " - Saludo FORMAL: " . $persona->saludoFormal($horario_3);
echo "<br> Horario: " . $horario_3 . " - Saludo INFORMAL: " . $persona->saludoInFormal($horario_3) . "<br>";





