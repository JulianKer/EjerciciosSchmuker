

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 14</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 14</h2>

        <form action="ejercicio14.php" method="post" style="display: flex; justify-content: space-around; font-family: 'Monospace', monospace;">
            <div>
                <label for="dimension">Dimensión de la matriz (cuadrada):</label>
                <input type="number" name="dimension" id="dimension" min="1" required>
            </div>
            <input type="submit" name="crear_matriz" value="Crear matriz"">
        </form>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>

