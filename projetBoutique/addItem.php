    <!DOCTYPE html>
    <html>

    <head>
        <title>Ceci est une page de formulaire </title>
        <meta charset="utf-8" />
    </head>

    <body>


        <form method="POST" action="displayItem.php" enctype="multipart/form-data">

            <p>
            <h1><strong>Quel article nous proposez-vous aujourd'hui ?</strong></h1>
            <input type="text" name="nouvelArticle" value="Nom de votre Article" />
            <?php
            if (isset($_GET["nouvelArticle"]) && $_GET["nouvelArticle"] === "empty") {
                echo "<p>Veuillez renseigner un Nom valide</p>";
            }
            ?> <br />

            <input type="number" name="price" value="0" min=0 />
            <?php
            if (isset($_GET["prix"]) && $_GET["prix"] === "empty") {
                echo "<p>Price is empty</p>";
            } else if (isset($_GET["prixnegative"]) && $_GET["prixnegative"] === "true") {
                echo "<p>Erreur au niveau du prix</p>";
            }
            ?> <br />

            <input type="texte" name="photo" value="photo du produit" /><?php
                                                                        if (isset($_GET["photo"]) && $_GET["photo"] === "empty") {
                                                                            echo "<p>Veuillez communiquer une image</p>";
                                                                        }
                                                                        ?>
            <br />

            <input type="submit" />
            </p>

        </form>
    </body>