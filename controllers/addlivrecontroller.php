<?php

    require_once "../includes/connexiondb.php";
    $con = connectdb();

    if(isset($_POST['livre']) && isset($_POST['editeur']) && isset($_POST['auteur'])){

        //création des variables pour stocker les données des champs
        $livre      =   $_POST['livre'];
        $editeur    =   $_POST['editeur'];
        $auteur     =   $_POST['auteur'];
    
        //on fait notre requête sql avec le prépare
        $req= $con->prepare('INSERT INTO livres (ID_AUTEUR,ID_EDITEUR,NOM_LIVRE) VALUES (?,?,?)');
        //puis on exécute notre requête
        $req->execute(array($auteur,$editeur,$livre));
        //retour sur le tableau des services
        // header('location: services.php');
    }

?>