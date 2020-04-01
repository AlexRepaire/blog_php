<?php

use app\Db;
use app\Article;

$article_id = $_GET['article_id'];

$delete = new Article(new Db());
$delete->deleteArticle($article_id);