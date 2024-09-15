
<?php require_once "ejercicio9.php"?>





<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 9</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
    <link rel="stylesheet" href="ej9.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 9</h2>

        <section class="container_gral_imgs">

            <p style="color: #ffffff; background-color: #c62323; text-align: center">
                <?php  if (isset($error) && isset($msjError)) if ($error) echo $msjError; /*-------------------------------------- el error ---*/?>
            </p>

            <?php
            if (isset($misArchivos) && isset($directorioImagenes)){
                if (count($misArchivos) > 0){
                    //echo count($misArchivos);
                    //echo json_encode($misArchivos);

                    $misArchivos = array_values($misArchivos);

                    for ($i = 0; $i < count($misArchivos); $i++) {
                        //echo $misArchivos[$i];
                        //$nombresDeImagenes[] = $misArchivos[$i];

                        if (queSeaUnaImg($misArchivos[$i])) {
                            echo '
            <div class="cada_img">
                <img src="' . $directorioImagenes . $misArchivos[$i] . '" class="img_subida" alt="Imagen no carga">
                <h4>' . $misArchivos[$i] . '</h4>
            </div>';
                        }
                    }
                }
            }
            ?>

        </section>

        <form action="index.php" method="post" enctype="multipart/form-data">

            <h5>Complete para subir una imagen: (.png, .jpeg, .jpg, .avif)</h5>
            <div class="cont_inputs">
                <input type="text" name="nombre_archivo" placeholder="Nombre imagen">
                <input type="file" name="file">
                <input type="submit" name="archivo" value="Publicar" required>
                <!--este input hidden lo pongo para que cuando se envia el form, se envia este valor con el post
                y lo pongo en una variable y con el value, veo a que pagina redirijo, si estoy publicando del
                ejercicio9 o del ejercicio10, es solo para saber de que archivo estoy subiendo la imagen-->
                <input type="hidden" name="actual" value="ejercicio9">
            </div>

        </form>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>