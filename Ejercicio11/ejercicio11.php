<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cantDeDados"])) {

    $cantidadDeDados = $_POST["cantDeDados"];
    $numerosDeCadaDado = [];
    $rutasDeDados = [];
    $sumaTotal = 0;

    if ($cantidadDeDados!=0){
        for ($i=0; $i < $cantidadDeDados; $i++) {
            $numerosDeCadaDado[$i] = random_int(1,6);
            $sumaTotal += $numerosDeCadaDado[$i];
            //echo $numerosDeCadaDado[$i];
        }
        //echo "suma: " . $sumaTotal;

        // una vez q tengo los num random, voy a poner la ruta de las imagens de esos numeros
        for ($i=0; $i < $cantidadDeDados; $i++) {
            // segun el numero random q tocó, va a ser esa su ruta (pq es la cara del dado q corresponde)
            switch ($numerosDeCadaDado[$i]) {
                case 1:
                    $rutasDeDados[$i] = "dado/1.avif";
                    //echo "la ruta es: " . $rutasDeDados[$i];
                    break;
                case 2:
                    $rutasDeDados[$i] = "dado/2.avif";
                    //echo "la ruta es: " . $rutasDeDados[$i];
                    break;
                case 3:
                    $rutasDeDados[$i] = "dado/3.avif";
                    //echo "la ruta es: " . $rutasDeDados[$i];
                    break;
                case 4:
                    $rutasDeDados[$i] = "dado/4.avif";
                    //echo "la ruta es: " . $rutasDeDados[$i];
                    break;
                case 5:
                    $rutasDeDados[$i] = "dado/5.avif";
                    //echo "la ruta es: " . $rutasDeDados[$i];
                    break;
                default:
                    $rutasDeDados[$i] = "dado/6.avif";
                    //echo "la ruta es: " . $rutasDeDados[$i];
                    break;
            }
        }
        //echo "El tamaño de las rutas es:". count($rutasDeDados);
    }
}
?>















<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="../Ejercicio8/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1 class="nombre">Schmuker Julián Gabriel</h1>

    <?php include "/xampp/htdocs/EjerciciosSchmuker/Ejercicio8/header.php";?>

    <section class="contenedor_enunciado">
        <h2>Ejercicio 11</h2>

        <p style="color: #ffffff; background-color: #c62323; text-align: center"><?php  if (isset($error) && isset($msjError)) if ($error) echo $msjError;?></p>

        <div class="contenedor_dados">
            <?php
            for ($i=0; $i < $cantidadDeDados; $i++) {
                echo '<div class="cada_dado">
                        <span>+' . $numerosDeCadaDado[$i] . ' →</span>
                        <img src="'. $rutasDeDados[$i] .'" alt="cara del dado">
                      </div>';
            }
            ?>
        </div>
        <h4>La suma de los dados es de: <span style="color: green"> <?php echo $sumaTotal?> </span></h4>
    </section>
</main>

<?php include "/xampp/htdocs/EjerciciosSchmuker/Ejercicio8/footer.php";?>
</body>
</html>
