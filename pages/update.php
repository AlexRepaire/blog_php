<?php
namespace app;

$article_id = $_GET['article_id'];
$update = new Article(new Db());


if (isset($article_id))
{
    foreach ($update->getArticle($article_id) as $article):
    ?>
    <h1>Modifier l'article :</h1>
    <form action="../public/index.php?page=updateArticle" method="post">
        <label for="titre">Titre de l'article</label>
        <input type="text" name="titre" id="titre" value="<?= $article['titre'] ?>">

        <label for="contenu">Contenu</label>
        <input type="text" name="contenu" id="contenu" value="<?= $article['contenu'] ?>">

        <input type="hidden" name="id" value="<?= $article_id ?>">
        <input type="submit" placeholder="valider">
    </form>
    <?php
    endforeach;
}
?>

