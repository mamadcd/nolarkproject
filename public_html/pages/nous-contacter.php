<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>

<head>
    <title>Nolark</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nous-contacter.css">
    <script src="../js/nolark.js" defer></script>
</head>

<body>
    <header>
        <nav id="main_nav">
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../pages/route.php">Route</a></li>
                <li><a href="../pages/cross.php">Cross</a></li>
                <li><a href="../pages/piste.php">Piste</a></li>
                <li><a href="../pages/enfant.php">Enfant</a></li>
                <li><a href="../pages/la-team.php">La Team</a></li>
                <li><a href="../pages/nous-contacter.php">Nous contacter</a></li>
            </ul>
        </nav>
    </header>
    <section id="local">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2969.3513749585654!2d2.369062405434811!3d48.86844428097984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66d06eda4b3dd%3A0xd1315cb00044d6ff!2sDiderot%20Education!5e0!3m2!1sfr!2sfr!4v1667248281694!5m2!1sfr!2sfr" width="490" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!3m2!1sfr!2sfr!4v1667248606647!5m2!1sfr!2sfr!6m8!1m7!1svQLWzWoROu0p2cd4X9IM5w!2m2!1d48.86849222738737!2d2.369719384037326!3f325.3008481040884!4f0.09688695979639306!5f0.4000000000000002" width="490" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section id="section-form">
        <form id="form_contact" name="form_contact">
            <fieldset id="coordo">
                <legend>Pour mieux nous connaitre</legend>
                <div class="formdivs">
                    <div class="form_nom">
                        <label for="i_nom">Votre nom :</label>
                        <input type="text" name="i_nom" id="i_nom" size="35" required><br>
                        <small id="nomObligatoire"></small>
                    </div>
                    <div class="form_prenom">
                        <label for="i_prenom">Votre prénom :</label>
                        <input type="text" name="i_prenom" id="i_prenom" size="35" required><br>
                        <small id="nomObligatoire"></small>
                    </div>
                    <div class="form_email">
                        <label>Votre Mail :</label>
                        <input type="email" name='i_email' id="i_email" size="35" required><br>
                        <small id="emailObligatoire"></small>
                    </div>
                    <div class="form_url">
                        <label>Votre URL :</label>
                        <input type="url" name="i_url" id="i_url" size="35">
                    </div>
                    <div class="form_profession">
                        <label>Vous etes :</label>
                        <select name="lst_typeclient" id="lst_typeclient" required>
                            <option></option>
                            <option value="Etudiant">Etudiant</option>
                            <option value="Salarié du privée">Salarié du privée</option>
                            <option value="Salarié du public">Salarié du public</option>
                            <option value="Chef d'entreprise">Chef d'entreprise</option>
                            <option value="Journaliste">Journaliste</option>
                            <option value="Professionnel">Professionnel</option>
                            <option value="Autres Statut">Autres Statut</option>
                        </select>
                    </div>
                    <div class="form_dateNaiss">
                        <label>Date de naissance :</label>
                        <input type='date' name="dateNaiss" required>
                    </div>
                </div>
                <fieldset id="marques">
                    <legend>Vos marques préférées</legend>
                    <div>
                        <label><input type="checkbox" name="chk_avg" value="agv">agv</label>
                        <label><input type="checkbox" name="chk_avg" value="Bell">Bell</label>
                        <label><input type="checkbox" name="chk_agv" value="Caberg">Caberg</label>
                        <label><input type="checkbox" name="chk_agv" value="Darts">Darts</label>
                        <label><input type="checkbox" name="chk_agv" value="Falco">Falco</label>
                        <label><input type="checkbox" name="chk_agv" value="Givi">Givi</label>
                        <label><input type="checkbox" name="chk_agv" value="Helstons">Helstons</label>
                        <label><input type="checkbox" name="chk_agv" value="Ica">Ica</label>
                        <label><input type="checkbox" name="chk_agv" value="Kenny">Kenny</label>
                    </div>
                    <!-- Exist-il une méthode plus éficace de faire des checkbox plus rapidement avec un tableau Input[name="id[ ]" -->
                    <div>
                        <label><input type="checkbox" name="chk_agv" value="Airoh">Airoh</label>
                        <label><input type="checkbox" name="chk_agv" value="Bering">Bering</label>
                        <label><input type="checkbox" name="chk_agv" value="Cameron">Cameron</label>
                        <label><input type="checkbox" name="chk_agv" value="Dg">Dg</label>
                        <label> <input type="checkbox" name="chk_agv" value="Fox">Fox</label>
                        <label><input type="checkbox" name="chk_agv" value="Gpa">Gpa</label>
                        <label><input type="checkbox" name="chk_agv" value="Hjc">Hjc</label>
                        <label><input type="checkbox" name="chk_agv" value="Icon">Icon</label>
                        <label><input type="checkbox" name="chk_agv" value="Knox">Knox</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="chk_agv" value="Arai">Arai</label>
                        <label><input type="checkbox" name="chk_agv" value="Arai">Bultaco</label>
                        <label><input type="checkbox" name="chk_agv" value="Chaft">Chaft</label>
                        <label><input type="checkbox" name="chk_agv" value="Diesel">Diesel</label>
                        <label><input type="checkbox" name="chk_agv" value="Furgan">Furgan</label>
                        <label><input type="checkbox" name="chk_agv" value="Grex">Grex</label>
                        <label><input type="checkbox" name="chk_agv" value="Hokkey">Hokkey</label>
                        <label><input type="checkbox" name="chk_agv" value="Ixon">Ixon</label>
                    </div>
                </fieldset>
                <p class="form_couleur"> <label>Votre couleur préférée: </label>
                    <input name="color" type="color">
                </p>
            </fieldset>
            <div>
                <fieldset id="motif_contact">
                    <legend>Motif du contact</legend>
                    <label><input type="radio">Demande d'information</label>
                    <label><input type="radio">Réclamation</label>
                    <label><input type="radio">Satisfation</label>
                    <label><input type="radio">Suivi de commande</label>
                    <label><input type="radio">Publicité</label>
                    <label><input type="radio">Autre</label>
                    <p>Si "Autre", veuillez préciser: </p>
                    <textarea class="message_cas_autre" name="name" rows="10" cols="40"></textarea>
                </fieldset>
                <div class="subbmit-reset">
                    <input type="submit" id="btn_envoyer" value="Envoyer votre demande de contact">
                    <input type="reset" value="Effacer les réponses">
                </div>
            </div>
        </form>
    </section>
    <footer>
        <div class="copyright">
            <p>@Copyright All Right Reserved. Created By Mamadou Seck</p>
        </div>
    </footer>
</body>

</html>