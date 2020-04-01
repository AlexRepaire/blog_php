<?php
namespace app;

?>
<h1>Créer votre article :</h1>
<form action="../public/index.php?page=create" method="post">
    <label for="titre">Titre de l'article</label>
    <input type="text" name="titre" id="titre">

    <label for="contenu">Contenu</label>
    <input type="text" name="contenu" id="contenu">

    <input type="submit" placeholder="valider">
</form>
<?php

