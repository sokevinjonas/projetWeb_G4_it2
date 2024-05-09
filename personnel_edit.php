<?php

use Database\DB;

if (!isset($_SESSION['userAuth'])) {
    session_start();
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    include_once('./DB.php');

    $db = DB::getInstance();
    $personnels = $db->select('personnel', 'id = ?', [$_GET['id']]);
    $personnel = $personnels[0];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>edit personnel</title>
</head>

<body>
    <?php include('header.php'); ?>

    <div id="main-container">
        <?php include('menu.php'); ?>
        <main>
            <div class="content_wrapper">
                <h2>Inscription</h2>
                <form action="./personnal_update.php" method="post">
                    <input type="hidden" name="id" value="<?= $personnel['id'] ?>">
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" name="nom" required value="<?= $personnel['nom'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <input type="text" id="prenom" name="prenom" required  value="<?= $personnel['prenom'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="date_de_naissance">Date de naissance:</label>
                        <input type="date" id="date_de_naissance" name="date_de_naissance" required  value="<?= $personnel['date_de_naissance'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="pays">Pays:</label>
                        <input type="text" id="pays" name="pays" required  value="<?= $personnel['pays'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required  value="<?= $personnel['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="mot_de_passe">Mot de passe:</label>
                        <input type="password" id="mot_de_passe" name="mot_de_passe" required  value="<?= $personnel['mot_de_passe'] ?>">
                    </div>
                    <input type="submit" value="S'inscrire">
                </form>
            </div>
        </main>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>