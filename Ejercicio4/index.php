<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 4</h2>
        <?php
        require_once "ejercicio4.php";
        $valor = 10;
        echo "El valor de la variable ANTES de llamar a incrementar() es = " . $valor;
        incrementar($valor);
        echo "<br> El valor de la variable DESPUES de llamar a incrementar() es = " . $valor . "<br>";
        ?>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>