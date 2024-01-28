/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */


const fixe = 1100;
let renumeration;

let nbAncien = parseInt(document.querySelector('#nbAncien').value);
let nbS20 = parseInt(document.querySelector('#nbS20').value);
let nbXS = parseInt(document.querySelector('#nbXS').value);
let nbMulti = parseInt(document.querySelector('#nbMulti').value);

document.getElementById('input[type="submit"]').addEventListener('submit', (e) => {
    renumeration = CalculAnciennete + CalculS20 + CalculMultilec;
    document.getElementById('#affiRenum').innerHTML = "renumeration: " + renumeration;

    //pour que la page ne se charge pas à toute envoie*/
    e.preventDefault();

}, false);

//Déclaration des chifres d'affaire 
let caXS = (nbXS - 50) * 350;
let caMulti1 = nbMulti * 180;
let caMulti2 = (nbMulti - 20) * 180;
let caMulti3 = (nbMulti - 50) * 180;

//Calcul du nombre d'anciennete 
function CalculAnciennete() {
    let renumeration;
    if (nbAncien >= 10) {
        renumeration = 1100 * 1.06;
        return renumeration;
    } else if (nbAncien >= 5) {
        renumeration = 1100 * 1.03;
        return renumeration;

    } else {
        renumeration = 1100;
        return renumeration;
    }
};
//renumération sur le chiffre d'affaire du S20 
function CalculS20() {
    let caS20 = nbS20 + 140;
    let renumeration;
    renumeration = renumeration + caS20 * 0.02;

    if (nbXS >= 50) {
        renumeration = renumeration + caXS * 0.06;
        return renumeration;
    }
};


//Fonction qui calcule
function CalculMultilec() {
    let renumeration;
    //renumération 1ère Tranche
    if (nbMulti <= 20) {
        renumeration = renumeration + caMulti1 * 0.04;
        return renumeration;
    }
    //Renumération 2ème Tranche
    else if (nbMulti <= 50) {
        renumeration = renumeration + ((20 * 180) * 0.04) + (caMulti2 * 0.06);
        return renumeration;
    }
    //Renumération 3éme Tranche
    else {
        renumeration = renumeration((20 * 180) * 0.4) + ((30 * 180) * 0.06) + (caMulti3 * 0.1);
        return renumeration;
    }
}



//Calcul du Prime du Transporteurs 
let ancienneteTransporteur = parseInt(document.getElementById('#t_nbAncien').value);
let numtAccident = parseInt(document.getElementById('#t_nbAccident'));
let numKm = parseInt(document.getElementById('#t_km'));

const km = 1;
const plafond = 900;

function Prime() {
    const nbre = 5;
    return nbre
}
//Prime En Cas Accident
function primeAccident() {
    let accident = numtAccident;
    if (accident === 1) {
        return Prime() / 2;
    } else if (accident === 2) {
        return Prime() / 3;
    } else if (accident === 3) {
        return Prime() / 4;
    } else if (accident > 3) {
        return Prime() = 0;
    } else {
        return Prime();
    }

}