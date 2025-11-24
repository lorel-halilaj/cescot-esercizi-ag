<?php 
    // Commento in linea

    /* 
        Commento su più linee
    */
    
    /* Stringhe */
    echo "<h1 class='class'>Hello world!</h1>"; // Stampa in output un dato
    echo '<h1 class="class" attr=\'qui sono nella stringa\'>Tipi di dato</h1>'; // Carattere di escape \ per usare lo stesso segno delle virgolette

    /* Boolean */
    // echo true;
    // echo false;

    /* Numeri */
    echo 10;
    echo "\n"; // A capo nel documento di output
    echo 1.15; // Numero decimale

    /* Nomi delle variabili */
    $variabile; // Il $ annuncia il nome della variabile
    $nome_variabile; // OK
    $nomeVariabile; // OK
    $nomevariabile; // Attenzione

    /* Array */
    // Array anonimo, si accede ai valori usando l'indice
    $array_1 = [1, 2, 3, 4, 5]; // Con le quadre non posso dichiarare le chiavi
    $array_2 = array(1, 2, 3, 4, 5);

    // Array dichiarato con chiavi per accedere ai valori
    $array_3 = array(
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta" => 21
    );

    echo $array_3; // Non posso stampare direttamente un array
    echo "<br>";
    print_r($array_3);
    echo "<br>";
    var_dump($array_3);

    echo "<br>";

    // Verifica se Mario Rossi è maggiorenne
    if ($array_3["eta"] >= 18) {
        echo "Utente maggiorenne";
    } else {
        echo "Utente minorenne";
    };

    echo "<br>";

    // Verifica se Mario Rossi è diciottenne
    if ($array_3["eta"] == 18) {
        echo "Utente diciottenne";
    } else {
        echo "Utente non diciottenne";
    };
    echo "<br>";

    // Uguaglianza stretta, controlla valore e tipo
    if ($array_3["eta"] == 21) {} // Questa condizione è VERA!
    if ($array_3["eta"] == "21") {} // Questa condizione è VERA!
    if ($array_3["eta"] === 21) {} // Questa condizione è VERA!
    if ($array_3["eta"] === "21") {} // Questa condizione è FALSA! perchè in questo caso gli ho chiesto se è una stringa

    /** Operatori logici
     * 
     * AND  -> and oppure &&
     * OR   -> or oppure ||
     * XOR  -> xor
     * NOT  -> ! 
     * 
     */

    // Sintassi alternativa
    if (true and false): // (true && false)
        echo "Condizione vera";
    else:
        echo "Condizione falsa";
    endif;
    // Stampa Falso
    echo "<br>";

    if (true or false): // (true || false)
        echo "Condizione vera";
    else:
        echo "Condizione falsa";
    endif;
    // Stampa Vero
    echo "<br>";

    $persona_1 = array(
        "nome" => "Luca",
        "cognome" => "Rossi",
        "telefono" => ""
    );

    $persona_2 = array (
        "nome" => "Lorenza",
        "cognome" => "Verdi",
        "telefono" => "+39 321654987"
    );

    if ($persona_1["telefono"] != ""):
        echo "Tel:";
        echo $persona_1["telefono"];
    endif;

    // Se la prima condizione è FALSA non valuto nemmeno la seconda, dato che il risultato è comunque FALSO
    if (array_key_exists("telefono", $persona_2) && $persona_2["telefono"] != ""):
        echo "Tel:" . $persona_2["telefono"]; // Concatenazione per unire più stringhe
    endif;

    // Creare un ciclo
    // Ciclo for
    $voti = [0, 6, 7, 7.5, 4, 8, 9, 10];
    $somma = 0;
    $num_voti = 0;

    for ($i = 0; $i < count($voti); $i++) :
        if ($voti[$i] > 0 && $voti[$i] <= 10) :
            $somma = $somma + $voti[$i];
            $num_voti ++;
        endif;
    endfor;
    
    echo "<br>La somma dei voti è " . $somma;
    echo "<br>Il numero dei voti è " . count($voti);
    echo "<br>Il numero dei voti validi è " . $num_voti;

    $media = $somma / $num_voti;

    echo "<br>La media dei voti è " . $media;

    // Ciclo while, va avanti finche la condizione non è vera (ciclo infinito)
    $numero = 45;
    $valori = [1, 3, 6, 87, 23, 5, 45, 17, 89, 12, 34];

    $trovato = false;

    $i = 0;
    while (!$trovato && $i < count($valori)) : // condizione di uscita certa
        if ($valori[$i] == $numero) :
            $trovato = true;
        endif;
        $i++;
    endwhile;

    echo "<br>";

    /**
     * Ciclo FOR equivalente
     *   for ($i = 0; !$trovato && $i < count($valori); $i++) :
     *       if ($valori[$i] == $numero) :
     *       $trovato = true;
     *       break;    // Break interrompe il ciclo più vicino
     *       endif;
     *   endfor;
    **/

    if ($trovato) :
        echo $numero . " è presente nell'array<br>";
    else :
        echo $numero . " non è presente nell'array<br>"; 
    endif;
    
    /**
     * Ciclo inverso: prima dai le istruzioi, poi valuta la condizione
     * 
     * do {
     * } while
     */

    // Operatori di incremento e decremento
    $i = 1;
    echo $i++; // Stampa il valore i (1) e poi lo incrementa (2)
    echo "<br>";
    echo ++$i; // Prima incrementa il valore i (3) e poi lo stampa (3)
    echo "<br>";
    echo $i--;
    echo "<br>";
    echo --$i;

    ?>                                                       