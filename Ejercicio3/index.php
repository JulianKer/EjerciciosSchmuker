<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 3</h2>
        <?php
        require_once "ejercicio3.php";
        echo concatenar("Hola", "mundo");
        echo concatenar("Pruebo", "concatenar");
        echo concatenar("Programación", "web");
        ?>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>