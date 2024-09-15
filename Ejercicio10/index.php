
<!-- aca llamo a la LOGICA del ejercicio9 ya q es lo mismo, solo q se muestra de distitna forma
pero eso lo hago mas abajo-->
<?php require_once "../Ejercicio9/ejercicio9.php"?>


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

    <?php include "../Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 10</h2>

        <section class="container_gral_imgs">

            <p style="color: #ffffff; background-color: #c62323; text-align: center"><?php  if (isset($error) && isset($msjError)) if ($error) echo $msjError;?></p>

            <ul style="display: flex; flex-direction: column; font-size: 1.2em;">

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
                            // aca pongo links en vez de imgs
                            echo '<li style="margin-bottom: .5em">
                                    <a href="ejercicio10.php?imgAMostrar='. $misArchivos[$i] .'" style="color: blue;">' . $misArchivos[$i] . '</a>
                                 </li>';
                        }
                    }
                }
            }
            ?>
            
            </ul>

        </section>

        <form action="index.php" method="post" enctype="multipart/form-data">

            <h5>Complete para subir una imagen: (.png, .jpeg, .jpg, .avif)</h5>
            <div class="cont_inputs">
                <input type="text" name="nombre_archivo" placeholder="Nombre imagen">
                <input type="file" name="file">
                <input type="submit" name="archivo" value="Publicar" required>
            </div>

        </form>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>