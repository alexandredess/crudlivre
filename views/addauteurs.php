<?php 
    //appel de mon head et de mon controller pour l'ajout des auteurs
    require_once "../includes/head.php";
    require_once "../controllers/addauteurcontroller.php";
?>
<body>
    <form action="../controllers/addauteurcontroller.php" method="POST" class="">
        <div class="">
            <label for="auteur">Nom de l'auteur </label>
            <input type="text" name="auteur" id="name" required />
        </div>
        <div class="">
                <input type="submit" value="Envoyer" />
        </div>
    </form>
</body>
</html>