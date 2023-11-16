<?php 
    require_once "../includes/head.php";
    require_once "../controllers/livrescontroller.php";
?>
    <body>
    <table>
  <thead>
    <tr>
      <th colspan="2">Liste des livres</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>id livre</td>
      <td>Nom du livre</td>
      <td>Nom Editeur</td>
      <td>Nom Auteur</td>
    </tr>
    <?php
    //boucle foreach pour afficher chaque ligne de la requête
    foreach($lignes as $ligne){
        echo '<tr>
      <td>'.$ligne['ID_LIVRE'].'</td>
      <td>'.$ligne['NOM_LIVRE'].'</td>
      <td>'.$ligne['NOM_EDITEUR'].'</td>
      <td>'.$ligne['NOM_AUTEUR'].'</td>
    </tr>';
    }
    ?>
  </tbody>
</table>
    </body>
</html>