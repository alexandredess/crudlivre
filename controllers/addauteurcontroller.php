<?php

require_once "../includes/connexiondb.php";
 $con = connectdb();
 
 //on vérifie si les champs sont remplis
if(isset($_POST['auteur'])){

    //création des variables pour stocker les données des champs
    $auteur= $_POST['auteur'];

    //on fait notre requête sql avec le prépare
    $req= $con->prepare('INSERT INTO auteur (NOM_Auteur) VALUES (?)');
    //puis on exécute notre requête
    $req->execute(array($auteur));
    //retour sur le tableau des auteurs
    // header('location: auteurs.php');
}

?>