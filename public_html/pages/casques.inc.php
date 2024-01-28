<?php
try {
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');

    $req = ' SELECT casque.id, marque.nom, casque.modele, type.libelle, casque.prix, casque.classement, casque.image, casque.stock';
    $req .= ' FROM casque INNER JOIN type ON casque.type = type.id';
    $req .= ' INNER JOIN marque ON casque.marque = marque.id';

    //var_dump($cnx);

    /* $req = $cnx->prepare($req);
    $req->execute();*/
    $res = $cnx->query($req);
    var_dump($res);


    while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) {

        echo '<article>';
        echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image, '" alt="', $ligne->modele, "' />'";
        echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image, "/>";
        echo '</article>';

        /* <img src="../images/casques/piste/Skyline-Block-Noir.jpg" alt="" />
        <p class="stock">
            <abbr data-tip="Plus que 3 en stok...">Stock</abbr>
        </p>
        <p class="prix">249,99€</p>
        <p class="marque">Scropion</p>
        <p class="modele"> Exo 1000 Air noir Mat</p>
        <div class="classement classement05"></div>
    </article>*/
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
