<?php

/*
 * Es 01
 * Dati due numero, stampare nell'ordine:
 * - Somma
 * - Moltiplicazione
 * - Divisione
*/

$a = 12;
$b = 24;

$somma = $a + $b;
$moltiplicazione = $a * $b;
$divisione = $a / $b;
echo $somma;
echo "<br>";
echo $moltiplicazione;
echo "<br>";
echo $divisione;
echo "<br>";

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
    echo "I valori sono uguali";
} else {
    echo "I valori non sono uguali";
};

?>