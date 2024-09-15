

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 13</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 13</h2>

        <form action="ejercicio13.php" method="post" style="height: 150px; display: grid; grid-template-columns: 1fr 1fr; justify-content: space-between; font-family: 'Monospace', monospace;">
            <div>
                <input type="checkbox" name="orden[]" value="entrada" id="entrada">
                <label for="entrada">Entrada</label>
            </div>
            <div>
                <input type="checkbox" name="orden[]" value="plato_principal" id="plato_principal">
                <label for="plato_principal">Plato principal</label>
            </div>
            <div>
                <input type="checkbox" name="orden[]" value="acompaniamiento" id="acompaniamiento">
                <label for="acompaniamiento">Acompañamiento</label>
            </div>
            <div>
                <input type="checkbox" name="orden[]" value="postre" id="postre">
                <label for="postre">Postre</label>
            </div>
            <input type="submit" name="pedir_orden" value="Pedir orden" style="grid-column: 1/3">
        </form>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>
