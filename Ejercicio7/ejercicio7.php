<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Ejercicio8/style.css">
    <title>Ejercicio 7</title>
</head>
<body>
    <main>
        <h1 class="nombre">Schmuker Julián Gabriel</h1>
        
        <section class="ejercicio">
            <h4 class="numero">Ejercicio 1: Semáforo</h4>
            <h5 class="enunciado">Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
“avance” o “estado desconocido” ante un caso no esperado.
a) función semaforo_a($color): Resuelva la solución utilizando if else
b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
c) función semaforo_c($color): Resuelva la solución utilizando switch </h5>
            <p class="resolucion">
                <?php
                require_once ("../Ejercicio1/ejercicio1.php");
                echo "A - " . semaforo_a("rojo") . "<br>";
                echo "B - " . semaforo_b("veRDe") . "<br>";
                echo "C - " . semaforo_c("AZUL");
                ?>
            </p>
        </section>
        <section class="ejercicio">
            <h4 class="numero">Ejercicio 2: Binomio cuadrado perfecto</h4>
            <h5 class="enunciado">Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
2
a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
potencia
b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
desarrollada del binomio: a
2 + 2*a*b + b
</h5>
            <p class="resolucion">
                <?php
                require_once "../Ejercicio2/ejercicio2.php";
                echo "<br>A - " . binomioCuadradoPerfecto_a(2,3);
                echo "<br>B - " . binomioCuadradoPerfecto_b(15,10);
                ?>
            </p>
        </section>
        <section class="ejercicio">
            <h4 class="numero">Ejercicio 3: Concatenar textos </h4>
            <h5 class="enunciado">Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
ambos textos concatenados como uno solo.
</h5>
            <p class="resolucion">
                <?php
                require_once "../Ejercicio3/ejercicio3.php";
                echo concatenar("Hola", "mundo");
                echo concatenar("Pruebo", "concatenar");
                echo concatenar("Programación", "web");
                ?>
            </p>
        </section>
        <section class="ejercicio">
            <h4 class="numero">Ejercicio 4: Incrementar </h4>
            <h5 class="enunciado">Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
la función, el valor del parámetro haya sido incrementado en 1
(Ver pasaje de parámetros por referencia)
</h5>
            <p class="resolucion">
                <?php
                require_once "../Ejercicio4/ejercicio4.php";
                $valor = 10;
                echo "El valor de la variable ANTES de llamar a incrementar() es = " . $valor;
                incrementar($valor);
                echo "<br> El valor de la variable DESPUES de llamar a incrementar() es = " . $valor . "<br>";
                ?>
            </p>
        </section>
        <section class="ejercicio">
            <h4 class="numero">Ejercicio 5: Sumatoria </h4>
            <h5 class="enunciado">Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
valores.
a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while</h5>
            <p class="resolucion">
                <?php
                require_once "../Ejercicio5/ejercicio5.php";
                $array = [1,5,8,4,6];
                echo '$array = [1,5,8,4,6]';
                echo "<br>" . sumatoria_a($array);
                echo sumatoria_b($array);
                echo sumatoria_c($array);
                ?>
            </p>
        </section>
        <section class="ejercicio">
            <h4 class="numero">Ejercicio 6: Nombre completo </h4>
            <h5 class="enunciado">Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
persona.
Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
concatenado al nombre un prefijo dependiendo del horario:
05hs a 13hs “Buenos días”
13hs a 21hs “Buenas tardes”
21hs a 05hs “Buenas noches”
Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
perteneciente al horario .
Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
“¡Hola Ezequiel! Que tengas un buen día”</h5>
            <p class="resolucion">
                <?php
                include_once "../Ejercicio6/ejercicio6.php";

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

                ?>
            </p>
        </section>
    </main>
</body>
</html>