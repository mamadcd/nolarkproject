/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

//Première implémentation JS

//var envoie = document.querySelector("#form_contact");
/*window.document.querySelector('input[type="button"]').addEventListener('click', function (e) {
    let EmailSaisi = document.querySelector("#i_email");
    if (document.querySelector("#i_nom").value === "" &&
            document.querySelector("#i_prenom").value === "") {
        alert("Le Nom ou le Prénom doit etre rempli");
    } else if (EmailSaisi.value === "") {
        alert("L'Email doit etre rempli");
    } else {
        document.querySelector("#form_contact").submit(); //Envoie pret
        let question = "Souhaitez-vous vraiment utiliser l'adresse E-mail suivante: " + EmailSaisi.value;
        if (confirm(question)) { //pour que l'utilisateur verifier et valide le Email saisi
            question.submit();
        }
    }

}, false);
*/

//Implémentation améliorer 
window.document.querySelector('input[type="submit"]').addEventListener('click', function (e) {
    let EmailSaisi = document.querySelector("#i_email");
    if (document.querySelector("#i_nom").value === "" &&
        document.querySelector("#i_prenom").value === "") {
        document.querySelectorAll('#nomObligatoire').innerHTML = "Le nom ou prénom est Obligatoire*";
        //alert("Le Nom ou le Prénom doit etre rempli");
    } else if (EmailSaisi.value === "") {
        document.querySelector('#emailObligatoire').innerHTML = "L'Email est Obligatoire";
        //alert("L'Email doit etre rempli");

    } else {
        let question = "Souhaitez-vous vraiment utiliser l'adresse E-mail suivante: " + EmailSaisi.value;
        if (confirm(question)) { //pour que l'utilisateur verifier et valide le Email saisi
            question.submit();
        }
        document.querySelector("#form_contact").submit(); //Envoie pret
    }
    e.preventDefault();
}, false);

//ça c'est une autre chose
/*
window.document.querySelector(".form_nom").addEventListener('input', (e) => {
    let nom = e.target.value;
}, false);

window.document.querySelector('select[name="lst_typeclient"]').addEventListener('input', (e) => {
    let profession = e.target.value;
}, false);
*/