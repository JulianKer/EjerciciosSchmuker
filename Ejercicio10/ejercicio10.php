
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 10</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
    <link rel="stylesheet" href="../Ejercicio9/ej9.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "/xampp/htdocs/EjerciciosSchmuker/Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 10</h2>

        <section class="container_gral_imgs">

            <p style="color: #ffffff; background-color: #c62323; text-align: center"><?php  if (isset($error) && isset($msjError)) if ($error) echo $msjError;?></p>

            <ul style="display: flex; flex-direction: column; font-size: 1.2em;">

                <?php
                $nombreDeLaImagen = "";
                isset($_GET["imgAMostrar"]) ? $nombreDeLaImagen = $_GET["imgAMostrar"] : $nombreDeLaImagen = "";
                if ($nombreDeLaImagen != "") {
                    echo '<div class="cada_img">
                            <img src="../imagenes/' . $nombreDeLaImagen . '" class="img_subida" alt="Imagen no carga">
                            <h4>' . $nombreDeLaImagen . '</h4>
                          </div>';
                }
                ?>

            </ul>

        </section>
    </section>
</main>

<?php include "/xampp/htdocs/EjerciciosSchmuker/Ejercicio8/footer.php";?>
</body>
</html>