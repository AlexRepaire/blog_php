<?php

use app\Commentaire;
use app\Db;

$commentaire_id = $_GET['id'];

$delete = new Commentaire(new Db());
$delete->deleteCommentaires($commentaire_id);