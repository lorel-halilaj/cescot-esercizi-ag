/* Commento multilinea */
// Commento in linea


// Stampa in console
console.log("Ciao mondo!"); 


/* POPUP
// Mostra un popup con messaggio
window.alert("Benvenuto!");

// Mostra un popup con messaggio di richiesta che risponde con true o false
window.confirm("Sei sicuro?");

// Stampa in console la risposta del messaggio con richiesta
console.log(window.confirm("Sei sicuro?"));

// Mostra un popup che richiede un dato
window.prompt("Inserisci un numero");
*/


// Dichiarazione di variabile
var stringa1 = "Ciao mondo"; // Variabile globale
let stringa2 = "Ciao mondo!"; // Variabile locale
const costante = "Ciao mondo!"; // Costante, il suo valore rimane immutato nel tempo


// Stringa
var stringa = "Insieme di caratteri";
console.log(stringa[2]); // Terzo carattere della stringa (la numerazione parte da 0)
console.log(typeof stringa);


// Interi => int
var intero = 1;
console.log(typeof intero); // Viene restituito il tipo dato di var "intero"

// Decimali => float
var decimale = 1.2;
console.log(typeof decimale);


// Boolean
var bool = true;
console.log(typeof bool);


// Array
var array = [1, 2, 3, 4, 5, 6];
console.log(typeof array);

// Oggetto
var object = {
    "nome": "Mario",
    "eta": 30
};
console.log(typeof object);


// Operatori aritmetici
var a = 1;
var b = 2;
console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % b); // Resto della divisione

a = 1;
console.log(a++); // Leggo e poi incrementa
console.log(++a); // Incrementa e poi leggo

// Operatori logici
console.log(a < b);
console.log(a > b);
console.log(a == 3); // Uguaglianza
console.log(a == 3); // Uguaglianza per valore
console.log(a === "3"); // Uguaglianza per valore e tipo

console.log(!(a < b)); // Not
console.log(a == 3 && b == 1); // AND
console.log(a == 3 || b == 1); // OR


// Concatenazione
console.log(stringa1 + stringa2);

a = 2;
b = 3;
c = "1";
var somma = a + c;

console.log(a + b); // Somma
console.log(a + c); // Concatenazione => 21
console.log(somma + b); // Concatenazione => 213
console.log(somma > 20); // Somma viene convertito in numero => true
console.log(somma.lenght > 212) // Quanto è lunga la stringa => false
console.log(a + b + c); // 51 => (2+3) + concatenazione di 1


// Tipo di dato undefined
var d;
console.log(d);
d = undefined;

// Tipo di dato null
var e = null;
console.log(e);

var oggetto = {
    "nullo": null,
    "indefinito": undefined
};
console.log(oggetto);

console.log(e == true);
console.log(d == true);
console.log(d == e); // Entrambi falsi => true
console.log(d === e); // Null è diverso da undefined => false
