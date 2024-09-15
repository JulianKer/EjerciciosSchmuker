<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 5</h2>
        <?php
        require_once "ejercicio5.php";
        $array = [1,5,8,4,6];
        echo '$array = [1,5,8,4,6]';
        echo "<br>" . sumatoria_a($array);
        echo sumatoria_b($array);
        echo sumatoria_c($array);
        ?>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>