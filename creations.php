<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="components/carousel/carousel.js"></script>
    <link href="style.css" rel="stylesheet">
    <title>Tissu magique</title>
</head>
<body>
    <?php
        include "connexion.php";

        try {
            $ajout = new PDO("mysql:host=$host;dbname=$BD", $user, $pwd);
            $ajout->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Récupérer les données de la table creations
            $query = $ajout->prepare("SELECT * FROM Article");
            $query->execute();
            $articles = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo 'Echec : ' . $e->getMessage();
        }
    ?>
    <div class="container fondContainer">
        <header class="row">
            <div class="col-md-2 d-none d-md-block">
                <img src="logo.png" alt="Logo">
            </div>
        </header>

        <div class="row">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">Accueil</a>
                    <a class="navbar-brand" href="creations.php">Créations</a>
                    <a class="navbar-brand" href="APropos.html">A propos</a>
                    <a class="navbar-brand" href="contact.php">Contact</a>
                    <a class="navbar-brand" href="connexion.html">Connexion</a>
                </div>
            </nav>
        </div>

        <main class="col-md-12">
            <div class="container">
                <div id="Produits" class="contenu">
                    <h2>Retrouvez ici toutes nos créations en vente:</h2>
                </div>
                <div class="row">
                    <?php foreach ($articles as $article): ?>
                        <div class="col-md-3">
                            <div class="card">
                            <img src=<?php echo htmlspecialchars($article['Image']); ?> class="card-img-top" alt="Robe">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($article['NomA']); ?></h5>
                                    <p class="card-text">Taille: <?php echo htmlspecialchars($article['Taille']); ?> <br> Prix: <?php echo htmlspecialchars($article['PrixUnitaire']); ?>€</p>
                                    <p class="card-text">Détails: <?php echo htmlspecialchars($article['Description']); ?></p>
                                    <form action="#" method="GET">
                                        <input id="prodId" name="prodId" type="hidden" value=<?php echo htmlspecialchars($article['Reference']); ?>/>
                                    <input type="submit" class="btn btn-primary" value="Voir">
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
    <footer class="footer">
            <p>&copy; Tissu Magique 2024</p>
        </footer>
</body>
</html>
