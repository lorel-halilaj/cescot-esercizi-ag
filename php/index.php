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

    // Uguaglianza stretta, controlla valore e tipo
    if ($array_3["eta"] == 21) {} // Questa condizione è VERA!
    if ($array_3["eta"] == "21") {} // Questa condizione è VERA!
    if ($array_3["eta"] === 21) {} // Questa condizione è VERA!
    if ($array_3["eta"] === "21") {} // Questa condizione è FALSA! perchè in questo caso gli ho chiesto se è una stringa

?>