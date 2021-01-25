<?php
include_once('class_catalogue.php'); // identique à include
include_once('class_articles.php');
include_once('functions.php');
include_once('class_basket.php');

$bdd = new PDO('mysql:host=localhost;dbname=mydb;port=3307;', 'root', 'Ressorts999!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//var_dump($_POST['qt']);
?>

<?php
//print_r($_POST);

if (isset($_GET['id'])) {
    $products = $query = $bdd->query('SELECT * FROM products WHERE id=:id', array('id' => $_GET['id']));
    if (empty($product)) {
        die("Ce produit n'existe pas");
    }
    $panier->addPanier($product[0]->id);
    die('Le Produit à bien été ajouté à votre panier <a href="catalogue.php"> Retourner sur le Catalogue</a>');
} else {
    die("Vous n'avez pas sélectionné de produit à ajouter au panier");
}





?>