<?php
$orden = [];
$platos = [];
$volverAElegir = true;

//por lo que investigué, se pone el if a modo de seguridad que se espere el post
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // pregunto si la key existe por si el cliente desclickeo todos los chekbox
    $orden = isset($_POST["orden"]) ? $_POST["orden"] : [];
    //echo json_encode($orden);

    // si NO esta vacio, hago la logica, sino, lo dejo en true y no te imprime ningun plato
    if (!empty($orden)){
        $volverAElegir = false;
        //echo "no entraste al empty";
        //echo json_encode($orden);
        $platos = parse_ini_file("menu.ini",);
        //echo json_encode($platos, JSON_PRETTY_PRINT);

        // aca filtro la orden con los platos que hay y me devuelve la coincidencia en un array
        $orden = array_diff($orden, $platos);
        //echo json_encode($orden);
    }
//}
?>

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

        <div style="font-family: 'Monospace', monospace">
        <h4><?php echo $volverAElegir ?  "Debe elegir un menú para poder ordenar." : "El menú según su orden es: "?></h4>
            <p><?php echo in_array("entrada", $orden) ? "Entrada : " . $platos["entrada"] : ""; ?></p>
            <p><?php echo in_array("plato_principal", $orden) ? "Plato principal : " . $platos["plato_principal"] : ""; ?></p>
            <p><?php echo in_array("acompaniamiento", $orden) ? "Acompañamiento : " . $platos["acompaniamiento"] : ""; ?></p>
            <p><?php echo in_array("postre", $orden) ? "Postre : " . $platos["postre"] : ""; ?></p>

        </div>

    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>
