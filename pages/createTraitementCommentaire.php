<?php

use app\Commentaire;
use app\Db;

$contenu = $_POST['contenu'];
$date = date('y/m/d h-i-s');
$article_id = $_GET['article_id'];
$user_id = 3;

$create = new Commentaire(new Db());
$create->createCommentaire($contenu, $date, $article_id, $user_id);