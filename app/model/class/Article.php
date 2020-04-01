<?php
namespace app;



class Article
{
    private $mysqli;
    public $titre;
    public $contenu;
    public $date;

    public function __construct(Db $db)
    {
        $this->mysqli = $db->mySQLI;
    }

    /************Récuperer les articles***************/

    public function getArticles()
    {
        return $this->mysqli->query("SELECT * FROM articles ORDER BY id DESC");
        //return $this->mysqli->query("SELECT * FROM users LEFT JOIN articles ON (users.id = articles.user_id) ORDER BY id DESC");

    }

    /************Récuperer un article précis***************/

    public function getArticle($article_id)
    {
        return $this->mysqli->query("SELECT * FROM articles where id=$article_id");
    }

    /*************Récuperer les articles de l'utilisateur******************/

    public function getArticleFromUser($user_id)
    {
        return $this->mysqli->query("SELECT * FROM articles where id=$user_id");
    }

    /************Ajouter un nouvel article**************
     * @param $titre
     * @param $contenu
     * @param $date
     */

    public function createArticle($titre, $contenu, $date, $user_id)
    {
        /*
        $this->mysqli->query("INSERT INTO articles (titre, contenu,date,user_id) VALUES ('$titre','$contenu','$date','3')");
        */

        $stmt = $this->mysqli->prepare("INSERT INTO articles (titre, contenu, date,user_id) VALUES (?,?,?,?)");
        $stmt->bind_param('sssi', $titre,$contenu, $date, $user_id);
        $stmt->execute();
        header("location: ../public/index.php?page=mesArticles");
    }

    /************Supprimer un article***************/

    public function deleteArticle($article_id)
    {
        $this->mysqli->query("DELETE FROM articles WHERE id=$article_id");
        header("location:".$_SERVER['HTTP_REFERER']);
    }

    /************Mettre à jours un article***************/

    public function updateArticle($article_id, $titre, $contenu)
    {
        $this->mysqli->query("UPDATE articles SET titre = '$titre', contenu = '$contenu' WHERE id=$article_id");
    }
}