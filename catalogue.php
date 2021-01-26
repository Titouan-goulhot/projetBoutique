<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Shopping Cart</title>
    <!-- Font Awsome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!--Boostrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row text-center py-5">
            <h1>Bienvenue sur notre catalogue :</h1>
        </div>
    </div>



</body>

</html>
<?php

include_once('functions.php');
require_once('class_catalogue.php');

include_once('class_articles.php');
//include_once('class_chaussure.php');



try {
    $bdd = new PDO('mysql:host=localhost;dbname=mydb;port=3307;', 'root', 'Ressorts999!');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
} //Fonction pour query n°1
$reponse = $bdd->query('SELECT * FROM products WHERE quantity !=0 '); //On rentre les requêtes SQL, dans notre cas on veux faire apparaitre tout les articles 


/*while ($donnees = $reponse->fetch()) { /*Pour faire apparaitre chaque articles, il faut créer une boucle While "tant que" tout les articles ne sont pas affichés
    On stock dans un tableau "$donnees" (array) chaque résultat de la boucle "fetch()". 
     cette ligne récupère une nouvelle entrée et place son contenu dans $donnees ; elle vérifie si $donnees  vaut vrai ou faux.
    fetch  renvoie faux ( false  ) dans $donnees  lorsqu'il est arrivé à la fin des données, 
    c'est-à-dire quand toutes les entrées ont été passées en revue. Dans ce cas, la condition du while  vaut "faux" et la boucle s'arrête.*/
// displayItemAvailable($donnees['name'], $donnees['price'], $donnees['picture'], $donnees['quantity']);
//}

//Créer Objet depuis la BDD

$catalogue = new Catalogue();

?>

<form action="basket.php" method="POST">

    <?php
    displaycat($catalogue)
    ?>

    <input type="submit" name="add" value="Panier" />

</form>

<?php //Fonction pour query n°2
$reponse = $bdd->query('SELECT * FROM products WHERE quantity = 0');
while ($donnees = $reponse->fetch()) {
?>

    <p>
        <strong> PRODUITS INDISPONIBLES</strong>
    </p> <?php
            displayItemNotAvailable($donnees['name'], $donnees['price'], $donnees['picture']);
        }
        $reponse->closeCursor();
            ?>



</body>