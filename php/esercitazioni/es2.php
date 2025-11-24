<?php

/**
 * Esercizio 1
 * Dato un insieme di valori, trovae il numero più alto
 */

$valori = [1, 3, 4, 5, 6, 7, 2, 5, 6, 7, 9, 4];

$maggiore = 0;

for ($i = 0; $i < count($valori); $i++) :
    if ($valori[$i] > $maggiore) :
        $maggiore = $valori[$i];
    endif;
endfor;

?>

    <div>
        <h2>Esercizio 01</h2>
        <p>
            Il valore maggiore è: <strong><?php echo $maggiore; ?></strong>
        </p>
    </div>

<?php

/**
 * Esercizio 2
 * Stampa tutti gli elementi, finché l'elemento corrente è inferiore a  15
 */

$valori = [11, 13, 4, 12, 6, 4, 12, 5, 16, 7, 19, 4];
$output = "";

for ($i = 0; $i < count($valori); $i++) :
    if ($valori[$i] < 15) :
        $output .= $valori[$i] . " "; // .= -> signifca concatena, equivale a $output = $output + $valori[$i] . " "
    else:
        break;
    endif;
endfor;

$i = 0;
while ($valori[$i] < 15) :
    $output .= $valori[$i++] . " ";
endwhile

?>

    <div>
        <h2>Esercizio 02</h2>
        <p>
            I valori sono: <strong><?php echo $output; ?></strong>
        </p>
    </div>

<?php

/**
 * Esercizio 3
 * - Stampa il nome di tutte le persone maggiorenni 
 * - Calcola l'età media di tutte le persone
 */

$persone = [
    array(
        "nome" = "Mario",
        "eta" = 15
    ),
    array(
        "nome" = "Lucia",
        "eta" = 18
    ),
    array(
        "nome" = "Luigi",
        "eta" = 19
    ),
    array(
        "nome" = "Francesco",
        "eta" = 16
    ),
    array(
        "nome" = "Claudia",
        "eta" = 25
    ),
    array(
        "nome" = "Gianni",
        "eta" = 21
    )
    ];

    $outputMaggiorenni = "",

    for ($i = 0; $i < count($persone["eta"]); $i++) :
        if ($persone["eta" >= 18]) :
        $outputMaggiorenni .= $persone["nome"] . " ";
?>

    <div>
        <h2>Esercizio 03</h2>
        <p>
            Le persone maggiorenni sono<br>
            <strong><?php echo $outputMaggiorenni; ?></strong>
        </p>
    </div>

<?php