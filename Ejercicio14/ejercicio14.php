<?php
$dimension = 0;
$matriz[] = [];
$sumaDiagonalPrincipal = 0;
$sumaDiagonalSecundaria = 0;
$sumaDeTodosLOsValores = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dimension = $_POST["dimension"];
    //echo $dimension;

    for ($i = 0; $i < $dimension; $i++) {
        for ($j = 0; $j < $dimension; $j++) {
            $matriz[$i][$j] = random_int(0, 100); // puse este limte pq sino era mucho ya, si quiero, le cambio el max o le saco los limites y me va a dar un num entre el intmax y el intmin
            $sumaDeTodosLOsValores += $matriz[$i][$j];
        }
    }
    //echo json_encode($matriz);
}
function mostrarMatriz($matrizRecibida){
    $msj = "";
    for ($i = 0; $i < count($matrizRecibida); $i++) {
        for ($j = 0; $j < count($matrizRecibida); $j++) {
            $msj .= '<p class="numero_de_la_matriz">' . $matrizRecibida[$i][$j] . '</p>';
        }
    }
    return $msj;
}
function mostrarNumerosDeLaDiagonalPrincipal($matrizRecibida){
    $msj = "";
    for ($i = 0; $i < count($matrizRecibida); $i++) {
        // este condicional lo pongo pa que se ponga la coma al mostrarlo, asi no se muestran solo los numeros
        // entonces si es el ultimo numero a agregar, q NO le ponga la coma final
        // la diagonal principal de las matrices son de A sub(n n), por eso pongo el mismo num $i en ambos
        $i == (count($matrizRecibida) - 1) ? $msj .= $matrizRecibida[$i][$i] : $msj .= $matrizRecibida[$i][$i] . ", ";
    }
    return $msj;
}
function mostrarNumerosDeLaDiagonalSEcundaria($matrizRecibida){
    $msj = "";
    $dimension = count($matrizRecibida);
    //echo $dimension;
    for ($i = 0; $i < count($matrizRecibida); $i++) {
        // este condicional lo pongo al igual q en la digonal principal pa q se muestre bien con la coma
        // en este caso, diagonal secundaria son de A sub(1 n), entonces por eso aca pongo el 1 siempre y la $i como 2do valor
        $i == (count($matrizRecibida) - 1) ? $msj .= $matrizRecibida[$i][count($matrizRecibida)-$i-1] : $msj .= $matrizRecibida[$i][count($matrizRecibida)-$i-1] . ", ";
    }
    return $msj;
}
?>






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

        <div class="contenedor_matriz">
            <h3 style="font-family: 'Monospace', monospace">Matriz:</h3>
            <div class="matriz" style="grid-template-columns: repeat(<?php echo $dimension?>, 1fr);">

                <?php echo mostrarMatriz($matriz); ?>

            </div>
        </div>

        <h3 style="font-family: 'Monospace', monospace">Diagonal principal: (<?php  echo mostrarNumerosDeLaDiagonalPrincipal($matriz)?>)</h3>
        <h3 style="font-family: 'Monospace', monospace">Diagonal secundaria: (<?php  echo mostrarNumerosDeLaDiagonalSEcundaria($matriz)?>)</h3>


        <p style="font-family: 'Monospace', monospace">Suma de todos los números de la matriz: <span style="color: blue"><?php echo $sumaDeTodosLOsValores?></span></p>
    </section>
</main>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>


