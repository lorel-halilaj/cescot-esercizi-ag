<?php

/**
 * Es 01
 * Dati due numero, stampare nell'ordine:
 * - Somma
 * - Differenza
 * - Moltiplicazione
 * - Divisione
*/

$a = 12;
$b = 24;

$somma = $a + $b;
// oppure echo $a + $b;

$differenza = $a - $b;

$moltiplicazione = $a * $b;
// oppure echo $a * $b;

$divisione = $a / $b;
// oppure echo $a / $b;

/**
* echo $somma;
* echo "<br>";
* echo $moltiplicazione;
* echo "<br>";
* echo $divisione;
* echo "<br>";
*/

// oppure
?>

    <div>
        <h2>Esercizio 01</h1>
        <ul>
            <li>Somma: <?php echo $somma; ?></li>
            <li>Differenza: <?php echo $differenza; ?></li>
            <li>Moltiplicazione: <?php echo $moltiplicazione; ?></li>
            <li>Divisione: <?php echo $divisione; ?></li>
        </ul>
    </div>

<?php

/*
 * Es 02
 * Data una parola verificare se è ugula a "casa"
*/

$parola = "albero";

if ($parola == "casa") {
    echo "La parola equivale a \"casa\"";
} else {
    echo "La parola non equivale a \"casa\"";
};

echo "<br>";

/** 
 * Es 03
 * Dato due valori numerici, verificarne l'uguaglianza
 */
$c = "145";
$d = 145;

if ($c === $d) {
    echo "I valori sono uguali per tipo e valore";
} else {
    echo "I valori non sono uguali per tipo e valore";
};

echo "<br><br>";

/** 
 * Es 04
 * Converti il voto in un giudizio:
 * - Da 0 a 5   -> Insufficiente
 * - 6          -> Sufficiente
 * - 7 o 8      -> Buono
 * - 9          -> Ottimo
 * - 10         -> Eccellente
 */

$voto = 6;

$giudizio = 'Voto non valido';

if ($voto <= 5):
    $giudizio = "Insufficiente";
elseif ($voto == 6):
    $giudizio = "Sufficiente";
elseif ($voto == 7 or $voto == 8):
    $giudizio = "Buono";
elseif ($voto == 9):
    $giudizio = "Ottimo";
elseif ($voto == 10):
    $giudizio = "Eccelente";
endif;

echo $giudizio;

?>