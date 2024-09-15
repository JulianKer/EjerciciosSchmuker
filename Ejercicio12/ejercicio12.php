<?php
$nombreVistante = "";
$planetaOrigenVistante = "";
$misVistantes = [];
$cantVistantesExtraterrestres = 0;


// me anoto los pasos pq me hice lio con el encode y el decode
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $nombreVistante = $_POST["nombre_visitante"];
    $planetaOrigenVistante = $_POST["nombre_planeta"];
    //echo $nombreVistante . " - " . $planetaOrigenVistante; ;

    // primero leo el json con el file_get_contents que recibe como parametro el json a leer
    // una vez leido, eso me devuelve el json en STRING y a ese STRING lo pongo en el json_encode que:
    // si SOLO le paso el string, me devuelve ese string en un OBJETO, pero si quier que me lo develva
    // como un array, puedo pasarle un 2do parametro que es un true, entonces ahi puedo recorrerlo como si fuese
    // un array comun
    $misVistantes = json_decode(file_get_contents("visitantes.json"), true);

    // despues a ESE array le meto el nuevo visitante
    $misVistantes[] = ["nombre" => $nombreVistante, "planeta" => $planetaOrigenVistante];

    // despues de meter el nuevo vistante, convierto el array a un string en formato json y meto ese string
    // en el archivo .json con el file_put_contents (q primero recibe DONDE lo voy a poner y despues QUE voy a poner)
    $visitantesEnJson = json_encode($misVistantes);
    //echo $visitantesEnJson;
    file_put_contents("visitantes.json", $visitantesEnJson);

    // una vez que esta el nuevo vistante en el .json, lo vuelvo a leer diciendole que me lo devuelva en un array
    $misVistantes = json_decode(file_get_contents("visitantes.json"), true);

    // depsues recorro el array y si el visitante NO es del planeta tierra, aumento que hay otro visitante extraterrestre
    foreach ($misVistantes as $visitante) {
        if ($visitante["planeta"] != "Tierra") $cantVistantesExtraterrestres++;
    }

}



?>

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

        <section style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left; background-color: #f2f2f2">Nombre del vistante: </th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left; background-color: #f2f2f2">Planeta de origen: </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($misVistantes as $misVistante) {
                        echo "<tr>
                            <td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $misVistante["nombre"] . "</td>
                            <td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $misVistante["planeta"] . "</td>
                          </tr>";
                    }
                ?>
                </tbody>
            </table>
            <p> Cantidad de extraterrestres: <?php  echo $cantVistantesExtraterrestres;?></p>
        </section>

    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>