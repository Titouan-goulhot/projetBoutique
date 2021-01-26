<?php

include_once('class_articles.php');
require_once('BDD.php');
class Catalogue
{
    private $articles = [];

    public function __construct()
    {
        //se connecter à la BDD
        $bdd = new PDO('mysql:host=localhost;dbname=titouandb;', 'titouan', 'campus2021', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //charger les données de la table "products"
        $reponse = $bdd->query('SELECT * FROM products');


        //Boucle qui parcours le tableau 
        foreach ($reponse as $article) {
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
