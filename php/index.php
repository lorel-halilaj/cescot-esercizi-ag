<?php 
    // Commento in linea

    /* 
        Commento su più linee
    */
    
    /* Stringhe */
    echo "<h1 class='class'>Hello world!</h1>"; // Stampa in output un dato
    echo '<h1 class="class" attr=\'qui sono nella stringa\'>Tipi di dato</h1>'; // Carattere di escape \ per usare lo stesso segno delle virgolette

    function br() {
        echo "<br>";
    };


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
    echo "<br>";

    $settimana = ["monday", "tuesday", "wesday", "thursday", "friday", "saturday", "sunday"];

    for ($i = 0; $i < count($settimana); $i++) :
        switch($settimana[$i]) :
            case "monday":
                echo "Lunedì";
                break;
            case "tuesday":
                echo "Martedì";
                break;
            case "wednesday":
                echo "Mercoledì";
                break;
            case "thursday":
                echo "Giovedì";
                break;
            case "friday":
                echo "Venerdì";
                break;
            case "saturday":
                echo "Sabato";
                break;
            case "sunday":
                echo "Domenica";
                break;
            default :
                echo "Giorno non valido";
        endswitch;
    endfor;

    br();

        $studenti = [
    array(
        "nome" => "Mario",
        "eta" => 15,
        "voti" => [3, 7, 6, 10]
    ),
    array(
        "nome" => "Lucia",
        "eta" => 18,
        "voti" => [6, 7, 6, 8]
    ),
    array(
        "nome" => "Luigi",
        "eta" => 19,
        "voti" => [8, 8, 8, 10]
    ),
    array(
        "nome" => "Francesco",
        "eta" => 16,
        "voti" => [5, 5, 6, 9]
    ),
    array(
        "nome" => "Claudia",
        "eta" => 25,
        "voti" => [7, 7, 7, 10]
    ),
    array(
        "nome" => "Gianni",
        "eta" => 21,
        "voti" => [6, 6, 6, 5]
    )
    ];


    /**
     * Calcola la media aritmetia dei voti
     * 
     * @param int[] $voti I voti dello studente
     * 
     * @return float La media aritmetica dei voti
     */
    function calcola_media($voti) {
        $somma = 0;
        for ($i = 0; $i < count($voti); $i++) :
            $somma += $voti[$i];
        endfor;

        $media = $somma / count($voti);
        return $media;
    };


    foreach ($studenti as $studente) :
        $media = calcola_media($studente["voti"]);
        echo $studente["nome"] . " ha una media di " .$media. ": ";
        if ($media >= 6) :
            echo "Promosso";
        else :
            echo "Bocciato";
        endif;
        br();
    endforeach;

    // Sunday 3 August 2025
    function formatta_data($data) {
        $parti = explode(" ", $data);
        $giorno_della_settimana = traduci_giorno_settimana($parti[0]);
        $giorno_del_mese = $parti[1];
        $mese = traduci_mese($parti[2]);
        $anno = $parti[3];

        return $giorno_della_settimana . " " . $giorno_del_mese . " " . $mese . " " . $anno;
    }

    echo formatta_data("Monday 14 September 2025");

    function traduci_giorno_settimana($giorno) {
        switch(strtolower($giorno)) :
            case "monday":
                return "Lunedì"; // return interrompe la funzione, quindi non serve break come in echo
            case "tuesday":
                return "Martedì";
            case "wednesday":
                return "Mercoledì";
            case "thursday":
                return "Giovedì";
            case "friday":
                return "Venerdì";
            case "saturday":
                return "Sabato";
            case "sunday":
                return "Domenica";
            default :
                return false;
        endswitch;
    }

    function traduci_mese($mese) {
        switch(strtolower($mese)) :
            case "january":
                return "Gennaio"; 
            case "february":
                return "Febbraio";
            case "march":
                return "Marzo";
            case "april":
                return "Aprile";
            case "may":
                return "Maggio";
            case "june":
                return "Giugno";
            case "july":
                return "Luglio";
            case "august":
                return "Agosto";
            case "september":
                return "Settembre";
            case "october":
                return "Ottobre";
            case "november":
                return "Novembre";
            case "december":
                return "Dicembre";
            default :
                return false;
        endswitch;
    }

    ?>                                                       