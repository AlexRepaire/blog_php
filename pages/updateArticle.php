<?php

use app\Db;
use app\Article;

$article_id = $_POST['id'];
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];

$update = new Article(new Db());
$update->updateArticle($article_id,$titre,$contenu);