function esercizio1() {
    let numeroUtente = window.prompt("Indovina il numero da 1 a 10");
    let numeroFortunato = 6;

    while (numeroUtente != numeroFortunato) {
        numeroUtente = window.prompt("Sbagliato, riprova!")
    }

    document.getElementById('es1-numeroFortunato').innerText = "Il numero era " + numeroFortunato;
    document.getElementById('es1-risultato').innerText = "Congratulazioni! Hai indovinato il numero fortunato";
}

