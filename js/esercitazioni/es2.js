function esercizio1() {
    let numeroUtente = window.prompt("Indovina il numero da 0 a 10");
    /* Per generare un numero casuale */
    /**
     * Math.random genra un numero decimale da 0 a 1, quindi bisogna transformare questo range 
     * Math.ceil arrotonda il numero, togliendo il decimale
     **/
    let numeroFortunato = Math.ceil(Math.random() * 10);

    while (numeroUtente != numeroFortunato) {
        numeroUtente = window.prompt("Sbagliato, riprova!")
    }

    document.getElementById('es1-numeroFortunato').innerText = "Il numero era " + numeroFortunato;
    document.getElementById('es1-risultato').innerText = "Congratulazioni! Hai indovinato il numero fortunato";
}

function esercizio2() {
    let numeroUtente = window.prompt("Inserisci un numero da 1 a 10");
    let risultato = 1
    
    for (let i = 1; i <= numeroUtente; i++) {
        risultato *= i;
    } 

    document.getElementById('es2-numeroUtente').innerText = "Il numero inserito è " + numeroUtente;
    document.getElementById('es2-risultato').innerText = "Il fattoriale del numero è " + risultato;
}

function esercizio3() {

    let studente = {
        nome: "",
        cognome: "",
        matricola: "",
        voti: []
    }

    // Input
    for (chiave in studente) {
        if (chiave != "voti") {
            studente[chiave] = window.prompt("Inserire " + chiave);
        } else {
            let stringaVoti = window.prompt("Inserire i voti separati da ','");
            studente[chiave] = stringaVoti.split(",");
        }
    }
    // Media
    let mediaVoti = 0;
    for (voto of studente.voti) {
        mediaVoti += parseInt(voto);
    }
    studente.mediaVoti = mediaVoti / studente.voti.length;

    // Stampa
    let risultato = "";
    for (chiave in studente) {
        if (chiave != "voti")
        risultato += chiave + ": " + studente[chiave] + "<br>";
    }
    document.getElementById("es3-risultato").innerHTML = risultato;
}
