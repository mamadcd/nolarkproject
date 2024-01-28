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
    <meta name="descript" content="Découvrez des casques motos dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <?php
                $pages = array("route.php", "cross.php", "piste.php", "enfant.php", "team.php", "nous-contacter.php");
                $noms = array("Route", "Cross", "Piste", "Enfants", "La team", "Nous Contacter");
                $nbliens = count($pages);
                for ($i = 0; $i < $nbliens; $i++) {
                    echo '<li><a href="pages/', $pages[$i], '">', $noms[$i], '</a></li> ';
                }
                ?>


            </ul>
        </nav>
    </header>
    <section id="principal">
        <article>
            <img src="images/post-it.png" alt="Post-It: Penser à rentrer en vie">
            <p>Au dela de l'obligation légale, le port d'un casque est le garant de votre sécurité. Le choix de votre casque doit se faire en fonction de vos besoins (route, cross, piste...).
            </p><br />
            <p>Spécialité reconnu dans l'univers de la sécurité du deux-roues, Nolark vous propose des milliers de modèles de casque disponilbes au travers de plus de 50 marques. Vous trouverez ici tous les types de casques moto : Jet, intégral, modulable, transformable, piste, cross ou encore un large choix de casque moto enfant (tailles et poids spécialement adaptés).
            </p><br />
            <p>Nolark c'est également la disponibilité de toutes les couleurs et matières et ce, pour toutes les bourses.
            </p><br />
            <p>Une question ? Un conseil ? Nos conseillers sont là pour vous aiguiller afin de trouver le modèle qui correspond à vos besoins.
            </p><br />
            <p>Nolark n'est pas seulement un magasin de casques, c'est avant tout une équipe de passionnés qui sélectionnent pour vous les meilleurs casques moto afin de répondre au mieux à vos attentes.<Small> <a href="pages/simulateur.html">Espace Réservée</a></Small></p>

        </article>
        <aside>
            <img src="images/conseilcasque01.jpg" alt="Conseil du mois : Casque Cross">
            <p>Pour le style: Furious replica</p>
            <img src="images/conseilcasque02.jpg" alt="Conseil du mois : Intégral">
            <p>Pour le confort: Stars racing</p>
        </aside>
    </section>
    <section id="categories">
        <h1>Catégories les plus populaires</h1>
        <div class="differente-categories">
            <article class="categorie-route">
                <a href="pages/enfant.html">
                    <img src="images/casques/route/casque-scorpion-exo-1000-air--twister-noir-blanc.jpg" alt="" />
                    <h2>Route</h2>
                </a>
            </article>
            <article id="categorie-piste">
                <a href="pages/piste.html">
                    <img src="images/casques/enfants/Quadrant-Fragment-Orange.jpg" alt="" />
                    <h2>Piste</h2>
                </a>
            </article>
            <article class="categorie-cross">
                <a href="pages/cross.html">
                    <img src="images/casques/cross/Hornet-ds-anthracite-mat.jpg" alt="" />
                    <h2>Cross</h2>
                </a>
            </article>
        </div>
    </section>
    <footer>
        <div class="copyright">
            <p>@Copyright All Right Reserved. Created By Mamadou Seck</p>
        </div>
    </footer>
</body>

</html>