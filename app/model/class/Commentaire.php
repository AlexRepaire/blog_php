<?php
namespace app;

class Commentaire
{
    public $mysqli;
    public $contenu;
    public $date;

    public function __construct(Db $db)
    {
        $this->mysqli = $db->mySQLI;
    }

    /***************Récuperer les commentaires d'un article précis********************/

    public function getCommentsFromArticle($article_id)
    {
        $result = $this->mysqli->query("SELECT * FROM commentaires WHERE article_id = $article_id ORDER BY date DESC");
        return $result;
    }

    /****************Ajouter un commentaire****************/

    public function createCommentaire($contenu, $date, $article_id, $user_id)
    {
        $create = $this->mysqli->prepare("INSERT INTO commentaires (contenu, date, article_id, user_id) VALUES (?, ?, ?, ?)");
        $create->bind_param('ssii',$contenu, $date, $article_id, $user_id);
        $create->execute();
        header("location: ../public/index.php?page=commentaires&article_id=$article_id");
    }

    /**************Supprimer un commentaire**************/

    public function deleteCommentaires($commentaire_id)
    {
        $this->mysqli->query("DELETE FROM commentaires WHERE id=$commentaire_id");
        header("location:".$_SERVER['HTTP_REFERER']);
    }

    /***************Mettre à jours un commentaire***************/

    public function updateCommentaires($commentaire_id)
    {
        $this->mysqli->query("UPDATE commentaires SET contenu = '$contenu' WHERE id=$commentaire_id");
    }
}