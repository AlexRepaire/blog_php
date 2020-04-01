<?php
namespace app;

require "../app/model/class/Autoloader.php";
autoloader::register();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}


ob_start();
if ($page === 'home')
{
    require "../pages/home.php";
}
elseif ($page === 'commentaires')
{
    require "../pages/commentaires.php";
}
elseif ($page === "admin")
{
    require "../pages/create.php";
}
elseif ($page === "create")
{
    require "../pages/createTraitementArticle.php";
}
elseif ($page === "update")
{
    require "../pages/update.php";
}
elseif ($page === "updateArticle")
{
    require "../pages/updateArticle.php";
}
elseif ($page === "deleteArticle")
{
    require "../pages/deleteArticle.php";
}
elseif ($page === "createComm")
{
    require "../pages/createTraitementCommentaire.php";
}
elseif ($page === "deleteCommentaire")
{
    require "../pages/deleteCommentaire.php";
}
elseif ($page === "mesArticles")
{
    require "../pages/mes-articles.php";
}
elseif ($page === "jeux_vidéos")
{
    require "../pages/jeux_vidéos.php";
}
elseif ($page === "photographie")
{
    require "../pages/photographie.php";
}
elseif ($page === "cuisine")
{
    require "../pages/cuisine.php";
}
$content = ob_get_clean();


require "../pages/default.php";
