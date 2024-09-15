

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 12</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 12</h2>

        <form action="ejercicio12.php" method="post" style="display: grid; grid-template-columns: repeat(auto-fill,minmax(150px, 1fr)); gap: 10px">

            <div>
                <label for="input_nombre">Ingrese el nombre del visitante:</label>
                <input type="text" name="nombre_visitante" id="input_nombre" placeholder="Ingrese el nombre" required>
            </div>

            <div>
                <label for="input_planeta">Seleccione el planeta de origen:</label>
                <select id="input_planeta" name="nombre_planeta">
                    <option value="Tierra" selected>Tierra</option>
                    <option value="Marte">Marte</option>
                    <option value="Saturno">Saturno</option>
                    <option value="Venus">Venus</option>
                    <option value="Júpiter">Júpiter</option>
                    <option value="Mercurio">Mercurio</option>
                </select>
            </div>
            <input type="submit" name="registrar" value="Registrar visitante">
        </form>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>