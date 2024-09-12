<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tissu magique</title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="components/carousel/carousel.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container fondContainer">
        <header class="row">
            <div class="col-md-2 d-none d-md-block">
                <img src="logo.png">
            </div>
        </header>
        
         <div class="row">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                     <a class="navbar-brand" href="index.html">
                        Accueil
                    </a>
                    <a class="navbar-brand" href="creations.php">
                        Créations
                    </a>
                    <a class="navbar-brand" href="APropos.html">
                        A propos
                    </a>
                     <a class="navbar-brand" href="contact.php">
                        Contact
                    </a>
                    <a class="navbar-brand" href="connexion.html">
                        Connexion
                    </a>
                </div>
            </nav>
        </div>
        
        <div class="containerA">
            <h1>Nous contacter:</h1>

            <form action="mailer.php" method="POST">
                <label for="name">Nom:</label>
                    <input type="text" name="name" id="name" required><br>
                <label for="prenom">Prénom:</label>
                    <input type="text" name="prenom" id="prenom" required><br>
                <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" required><br>
                <label for="message">Message:</label>
                    <textarea name="message" id="message" required></textarea><br>
                <div class="form-buttons">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>

        <footer class="footer">
            <p>&copy; Tissu Magique 2024</p>
        </footer>
    </div>
</body>
</html>