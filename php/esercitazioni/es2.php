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
        "nome" => "Mario",
        "eta" => 15
    ),
    array(
        "nome" => "Lucia",
        "eta" => 18
    ),
    array(
        "nome" => "Luigi",
        "eta" => 19
    ),
    array(
        "nome" => "Francesco",
        "eta" => 16
    ),
    array(
        "nome" => "Claudia",
        "eta" => 25
    ),
    array(
        "nome" => "Gianni",
        "eta" => 21
    )
    ];

    $anni = 0;
?>

    <div>
        <h2>Esercizio 03</h2>
        <p>
            Le persone maggiorenni sono<br>
        </p>
            <ul>
                <?php
                    foreach ($persone as $persona) :
                        if ($persona["eta"] >= 18) :
                            echo "<li>".$persona["nome"]."</li>";
                        endif;
                        $anni += $persona["eta"];
                    endforeach;
                ?>
            </ul>
        <p>
            La media dell'età di tutte le persone è: <?php echo ( $anni / count($persone) ); ?>
        </p>
    </div>

<?php 

/**
 * Esercizio 4
 * 
 * Data l'età di una persona, ritorna se può guidare il 125 (16 anni)
 */

function guida_125($eta) {
    if ($eta >= 16)
        return true;
    
    return false;
};


/**
 * Esercizio 5
 * 
 * Dato un numero verifica se è divisibile per 3
 * ($numero % 3 == 0) // Il resto della divisione tra numero e 3 è uguale a 0
 */

function divisibile_3($numero) {
    return $numero % 3 == 0;
};

/**
 * Esercizio 6
 * 
 * Dato un numero, ritornal in formato EURO (€ 10.00)
 */

function number_to_euro($numero) {
    return "€ " . number_format($numero, 2, ".", "");
}

echo number_to_euro(1584.22);


?>
