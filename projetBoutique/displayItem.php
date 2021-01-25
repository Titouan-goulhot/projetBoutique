<!DOCTYPE html>
<html>

<head>
    <title>Ceci est la page "cible" du formulaire </title>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $location = "Location: addItem.php";
    $if_error = false;
    if (!$_POST["nouvelArticle"]) {
        $location .= "nouvelArticle=empty&";
        $if_error = true;
    }
    if (!$_POST["prix"]) {
        $location .= "prix=empty&";
        $if_error = true;
    }
    if (!$_POST["photo"]) {
        $location .= "photo=empty&";
        $if_error = true;
    }
    if ((int)$_POST["prix"] < 0) {
        $location .= "pricenegative=true&";
        $if_error = true;
    }
    if ($if_error) {
        header($location);
    }
    ?>


    <p> Bonjour</p>

    <p>Votre article s'appelle <?php echo htmlspecialchars($_POST['nouvelArticle']); ?></p>

    <p>Vous le vendez <?php echo htmlspecialchars($_POST['prix']); ?> $ à l'unité. </p>

    <p> <?php echo "<img src=" . $_POST["photo"] . " alt='photo du produit'>"; ?> </p>

    <p>Si vous voulez changer votre choix, <a href="addItem.php"><strong> sur la page précédente </strong></a></p>


</body>