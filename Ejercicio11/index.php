

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 11</h2>

        <form action="ejercicio11.php" method="post" class="formulario_select">
            <label for="input_dados">Elija la cantidad de dados a lanzar:</label>

            <!--el select te devuelve un array, por mas q no sea de multiple opicion como es este caso,
            es decir, este select si selecciono la opcion 5, me devuelve ["5"] por ende tengo que,
            acceder a travez de $variableQueRecibeLaOpcion[0] y listo-->
            <select id="input_dados" name="cantDeDados">
                <option value="1" selected>1 DADO</option>
                <option value="2">2 DADOS</option>
                <option value="3">3 DADOS</option>
                <option value="4">4 DADOS</option>
                <option value="5">5 DADOS</option>
                <option value="6">6 DADOS</option>
            </select>
            <input type="submit" name="lanzar" value="Lanzar">
        </form>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>