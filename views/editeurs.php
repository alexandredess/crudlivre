<?php 
    require_once "../includes/head.php";
    require_once "../controllers/editeurcontroller.php";
?>
    <body>
    <table>
  <thead>
    <tr>
      <th colspan="2">Liste des éditeurs</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>id éditeur</td>
      <td>Nom de l'éditeur</td>
    </tr>
    <?php
    //boucle foreach pour afficher chaque ligne de la requête
    foreach($lignes2 as $ligne){
        echo '<tr>
      <td>'.$ligne['ID_EDITEUR'].'</td>
      <td>'.$ligne['NOM_EDITEUR'].'</td>
    </tr>';
    }
    ?>
  </tbody>
</table>
    </body>
</html>