<?php
    //appel de mon fichier de connexion
    require_once "../includes/connexiondb.php";
    //creation de la variable de connexion à la bdd
    $con = connectdb();

    //création de la requête dans une variable appelé $req
    $req = 'SELECT ID_LIVRE,NOM_LIVRE,NOM_EDITEUR,NOM_AUTEUR FROM livres 
            INNER JOIN editeur ON livres.ID_EDITEUR = editeur.ID_EDITEUR
            INNER JOIN auteur ON livres.ID_AUTEUR = auteur.ID_AUTEUR';
    /*création d'une variable pour le résulat de la requete et on se co
    à la bdd par la même occasion et on applique la requete avec la variablé créé en amont $req
    */
    $response = $con->query($req);
    //récupération de toutes les lignes de la requête
    $lignes = $response->fetchall();

?>