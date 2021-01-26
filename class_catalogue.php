<?php

include_once('class_articles.php');
class Catalogue
{
    private $articles = [];

    public function __construct()
    {
        //se connecter à la BDD
        $bdd = new PDO('mysql:host=localhost;dbname=mydb;port=3307;', 'root', 'Ressorts999!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //charger les données de la table "products"
        $query = $bdd->query('SELECT * FROM products');


        //Boucle qui parcours le tableau 
        foreach ($query as $article) {
            $nouvelArticle = new Article($article['id'], $article['name'], $article['description'], $article['price'], $article['picture'], $article['weight'], $article['quantity'], $article['available']);

            $this->articles[$article['id']] = $nouvelArticle;
        }
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function getArticleById($id)
    {
        return $this->articles[$id];
    }
}
