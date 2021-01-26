<?php
/*function displayItem1()
{
    //Pour ne pas à avoir à redéfinir en local ce que l'on veut afficher, on utilise global $NomDeLaVariable; en dehors de la fonction
    global $item1;
    //On lui demande ensuite d'imprimer les différents éléments de notre variable dans la function displayItem1()
    echo $item1['Nom'] . "\n";
    echo $item1['prix'];
    echo "<img src=" . $item1['photo'] . ">";
} //Et enfin, on appelle notre fonction
displayItem1();

function displayItem2()
{
    global $item2;

    echo $item2['Nom'] . "\n";
    echo $item2['prix'];
    echo "<img src=" . $item2['photo'] . ">";
}
displayItem2();

function displayItem3()
{
    global $item3;

    echo $item3['Nom'] . "\n";
    echo $item3['prix'];
    echo "<img src=" . $item3['photo'] . ">";
}
displayItem3();
?>
*/

require_once('class_catalogue.php');

function displayItemAvailable($nom, $prix, $photo, $quantity)
{

    echo "<p><Strong>Produits</Strong>" . $nom . "<br />" . $photo . "<br />";
    echo "Le Prix de cet article est de : " . $prix . "€, disponible en " . $quantity . " Exemplaires </p>";
}

// Fonction Checkbox et saisi de quantité 

function displayCheckbox($name, $price, $picture, $key)
{

    echo "<img  src='" . $picture . "'class='img-fluid' alt=''/> <br>";
    echo "Nom du produit : " . $name . "<br>";
    echo "Prix : " . $price . "€" . "<br>";
    echo '<input type="checkbox" name="article[' . $key . ']" value=""><br>';
}


function displayItemNotAvailable($nom, $prix, $photo)
{
    echo $nom . "\n";
    echo $prix;
    echo "<img src=" . $photo . ">";
}




function displayCat(Catalogue $catalogue)
{

    foreach ($catalogue->getArticles() as $key => $article) {
        displayCheckbox($article->getname(), $article->getprice(), $article->getpicture(), $article->getid());
        //print_r($article);
    }
}



function displayClient(Client $client)
{
    echo $client->getFirstName()  . ' ' . $client->getLastName() . ' <br />' . $client->getId() . ' <br /> ';
}

function displayListeClients(ListeClients $liste_clients)
{
    foreach ($liste_clients->getliste_clients() as $personnes) {
        displayClient($personnes);
    }
}
