<?php 
    //appel de mon head et de mon controller pour l'ajout des livres
    //affichage des auteurs et éditeurs dans les selects
    require_once "../includes/head.php";
    require_once "../controllers/addlivrecontroller.php";
    require_once "../controllers/auteurscontroller.php";
    require_once "../controllers/editeurcontroller.php";
?>
<body>
    <form action="../controllers/addlivrecontroller.php" method="POST" class="">
        <div class="">
            <label for="livre">Nom du livre </label>
            <input type="text" name="livre" id="name" required />
        </div>
        
            <div>
                <label for="auteur">choisi un auteur:</label>

                <select name="auteur" id="auteur">
                <option value="">--Please choose an option--</option>
                <?php 
                foreach ($lignes as $ligne){
                   echo '<option value='.$ligne['ID_AUTEUR'].'>'.$ligne['NOM_AUTEUR'].'</option>';
                   var_dump($ligne);
                }
                ?>
                </select>
            </div>
        
            <div>
                <label for="editeur">choisi un éditeur:</label>

                <select name="editeur" id="editeur">
                <option value="">--Please choose an option--</option>
                <?php
                foreach ($lignes2 as $ligne2){
                   echo '<option value='.$ligne2['ID_EDITEUR'].'>'.$ligne2['NOM_EDITEUR'].'</option>';
                   var_dump($ligne2);
                }
                ?>
                </select>
            </div>
            <div class="">
                <input type="submit" value="Envoyer" />
            </div> 
    </form>
</body>
</html>