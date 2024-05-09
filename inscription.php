<?php
if (!isset($_SESSION['userAuth'])) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>

<body>
    <?php include('header.php'); ?>

    <div id="main-container">
        <?php include('menu.php'); ?>
        <main>
            <div class="content_wrapper">
                <h2>Inscription</h2>
                <form action="./inscription_store.php" method="post">
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" name="nom" required >
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <input type="text" id="prenom" name="prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="date_de_naissance">Date de naissance:</label>
                        <input type="date" id="date_de_naissance" name="date_de_naissance" required>
                    </div>
                    <div class="form-group">
                        <label for="pays">Pays:</label>
                        <input type="text" id="pays" name="pays" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mot_de_passe">Mot de passe:</label>
                        <input type="password" id="mot_de_passe" name="mot_de_passe" required>
                    </div>
                    <input type="submit" value="S'inscrire">
                </form>
                <a href="login.php"><button>Se connecter</button></a>
            </div>
        </main>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>