<?php
$rutaImg = "";
$nombre = "";

$nombresDeImagenes = [];
$directorioImagenes = "../imagenes/";

$error = false;
$msjError= "";
/*-----------------------------------------*/
/*-----------------------------------------*/

$misArchivos = array_diff(scandir($directorioImagenes), array('.', '..'));


/*
$misArchivos = array_diff(scandir($directorioImagenes), array('.', '..'));*/

// este request metod es similar al js que seria como un evento que espera cuando se envie el formulario por el post
// entonces cuando se envia, entra a este if pq detecto que hubo una request y ejecuta el codigo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error=false;

    $nombre = $_POST["nombre_archivo"]; //obtengo el nombre por el post del input text del nombre;
    //echo $nombre;

    if ($_FILES["file"]["error"] > 0) {
        //echo "Error: " . $_FILES["file"]["error"] . "<br />";
        $msjError = "Ocurrio un error al subir el archivo. Intente nuevamente.";
        $error = true;
    }else{
        $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); // CON ESTE EN teoria obtengo la extension de la ruta original

        if ($extension == "png" || $extension == "jpg" || $extension == "jpeg" || $extension == "avif") {

            $rutaImg = $directorioImagenes . $nombre . "." . $extension;
            if (file_exists($rutaImg)) {
                $msjError = "La imagen: " . $nombre . "." . $extension . " ya existe. ";
                $error = true;
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $rutaImg);
                $misArchivos = array_diff(scandir($directorioImagenes), array('.', '..'));

                // este lo hago para poder REUTILIZAR esta logica para el archivo 10
                // para eso, en el index del ej9 puse un input hidden q cuando lo llamo por el post "actual",
                // me dice su valor, dependiendo de que archivo vino el post, es el archivo ej9 o el ej10,
                //pero solo pongo el del 9 entonces en el 10 no pongo el input hidden, entonces al preguntar si es  ta,
                // existe, me dice q no y devuelvo un string vacio
                $actual = isset($_POST["actual"]) ? $_POST["actual"] : "";
                $actual == "ejercicio9" ? header("Location: index.php") : header("Location: ../Ejercicio10/index.php");
                exit();
            }

        }else{
            $msjError = "Archivo de formato inválido.";
            $error = true;
        }
    }
}


function queSeaUnaImg($nombreDeArchivo){
    $esImagen = false;
    $extensionDelArchivo = pathinfo($nombreDeArchivo, PATHINFO_EXTENSION);
    if ($extensionDelArchivo == "png" || $extensionDelArchivo == "jpg" || $extensionDelArchivo == "jpeg" || $extensionDelArchivo == "avif") {
        $esImagen = true;
    }
    return $esImagen;
}
?>















