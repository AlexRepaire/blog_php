<?php
namespace app;

    $commentaire = new Commentaire(new Db());
    $article = new Article(new Db());
    $article_id = $_GET['article_id'];

    foreach ($article->getArticle($article_id) as $article)
    {
        ?>
            <div>
                <h1><?= $article['titre'] ?></h1>
                <p><?= $article['contenu'] ?></p>
                <p><?= $article['user_id'] ?></p>
                <p>Créé le : <?= $article['date'] ?></p>
            </div>
            <div>
            <h3>Commentaires</h3>

            <?php
            foreach ($commentaire->getCommentsFromArticle($article_id) as $commentaire)
        {
            ?>
            <div>
                <h3>Par: <?= $article['user_id'] ?></h3>
                <p>Posté le : <?= $commentaire['date'] ?></p>
                <h4><?= $commentaire['contenu'] ?></h4>
                <button class='delete' type='submit' name='supprimer'>
                    <a href='../public/index.php?page=deleteCommentaire&id=<?= $commentaire['id'] ?>'>Supprimer commentaire</a>
                </button>
            </div>
            <br>
            <?php
        }
    }
    ?>
                <form action="../public/index.php?page=createComm&article_id=<?= $article_id ?>" method="post">
                    <label for="contenu">Votre commentaire: </label>
                    <input type="text" name="contenu" id="contenu">

                    <input type="submit" placeholder="valider">
                </form>
    </div>
