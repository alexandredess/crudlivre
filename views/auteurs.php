<?php 
    require_once "../includes/head.php";
    require_once "../controllers/auteurscontroller.php";
?>
    <body>
    <table>
  <thead>
    <tr>
      <th colspan="2">Liste des auteurs</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>id auteur</td>
      <td>Nom de l'auteur</td>
    </tr>
    <?php
    //boucle foreach pour afficher chaque ligne de la requête
    foreach($lignes as $ligne){
        echo '<tr>
      <td>'.$ligne['ID_AUTEUR'].'</td>
      <td>'.$ligne['NOM_AUTEUR'].'</td>
    </tr>';
    }
    ?>
  </tbody>
</table>
    </body>
</html>