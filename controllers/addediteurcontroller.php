<?php

    require_once "../includes/connexiondb.php";
    $con = connectdb();

    if(isset($_POST['editeur'])){

        //création des variables pour stocker les données des champs
        $editeur= $_POST['editeur'];
    
        //on fait notre requête sql avec le prépare
        $req= $con->prepare('INSERT INTO editeur (NOM_EDITEUR) VALUES (?)');
        //puis on exécute notre requête
        $req->execute(array($editeur));
        //retour sur le tableau des services
        // header('location: services.php');
    }

?>