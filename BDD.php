<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF - 8"/>
        <meta name="viewport" content="width=device-width">
        <link href="style2.css" rel="stylesheet">
        <title>BDD</title>
    </head>
    <body>
        <?php
            include "connexion.php";

            try{
                $ajout = new PDO("mysql:host=$host;dbname=$BD", $user, "password=$pwd");
                $ajout->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $requete = $ajout->prepare(
                    "INSERT INTO Article(Reference,NomA,Taille,PrixUnitaire,Couleur,Type,Description,Image)
                    VALUES(:Reference,:NomA,:Taille,:PrixUnitaire,:Couleur,:Type,:Description,:Image)"
                );

                $requete->bindParam(':Reference', $_POST['reference']);
                $requete->bindParam(':NomA', $_POST['noma']);
                $requete->bindParam(':Taille', $_POST['taille']);
                $requete->bindParam(':PrixUnitaire', $_POST['prix']);
                $requete->bindParam(':Couleur', $_POST['couleur']);
                $requete->bindParam(':Type', $_POST['type']);
                $requete->bindParam(':Description', $_POST['description']);
                $requete->bindParam(':Image', $_POST['image']);
                $requete->execute();
            }
            catch(PDOException $e){
                echo 'Echec : ' .$e->getMessage();
            }
        ?>
    </body>
</html>