<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 6</h2>
        <?php
        include_once "ejercicio6.php";

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
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>