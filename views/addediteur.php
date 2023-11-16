<?php 
    //appel de mon head et de mon controller pour l'ajout des editeurs
    require_once "../includes/head.php";
    require_once "../controllers/addediteurcontroller.php";
?>
<body>
    <form action="../controllers/addediteurcontroller.php" method="POST" class="">
        <div class="">
            <label for="editeur">Nom de l'éditeur </label>
            <input type="text" name="editeur" id="name" required />
        </div>
        <div class="">
                <input type="submit" value="Envoyer" />
        </div>
    </form>
</body>
</html>