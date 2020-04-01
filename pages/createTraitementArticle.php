<?php

use app\Article;
use app\Db;

$titre = $_POST['titre'];
$contenu = $_POST['contenu'];
$date = date('y/m/d h-i-s');
$user_id = 3;

$create = new Article(new Db());
$create->createArticle($titre, $contenu, $date, $user_id);
