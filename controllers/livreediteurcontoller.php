<?php
 //appel de mon fichier de connexion
 require_once "../includes/connexiondb.php";
 //creation de la variable de connexion à la bdd
 $con = connectdb();;

// Exécutez la requête
$req = $pdo->prepare('SELECT nom FROM categories WHERE id = :id_categorie');
$req->bindParam(':id_categorie', $id_categorie);
$req->execute();

// Récupérez le résultat
$row = $req->fetch();
?>