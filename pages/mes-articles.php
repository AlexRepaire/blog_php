<?php
namespace app;

$article = new Article(new Db());
?>
<h1>Bienvenue sur ton espace personnel</h1>
<h2>Voici la liste de tes articles :</h2>

<?php
foreach ($article->getArticleFromUser('3') as $article)
{
    ?>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?= $article['auteur'] ?></strong>
                    <h3 class="mb-0"><?= $article['titre'] ?></h3>
                    <div class="mb-1 text-muted"><?= $article['date'] ?></div>
                    <p class="card-text mb-auto"><?= $article['contenu'] ?></p>
                    <a href="../public/index.php?page=commentaires&article_id=<?= $article['id'] ?>">Voir les commentaires</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
            </div>
        </div>
    </div>
    <?php
}
