<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 1</h2>

        <?php
        require_once ("ejercicio1.php");
        echo "A - " . semaforo_a("rojo") . "<br>";
        echo "B - " . semaforo_b("veRDe") . "<br>";
        echo "C - " . semaforo_c("AZUL");
        ?>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>