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
    <title>Create etudiant</title>
</head>

<body>
    <?php include('header.php'); ?>

    <div id="main-container">
        <?php include('menu.php'); ?>
        <main>
            <div class="content_wrapper">
                <h2 style>Formulaire d'inscription</h2>
                <form action="./etudiant_store.php" method="POST">

                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">

                        <label for="prenom">Prénom </label>
                        <input type="text" id="prenom" name="prenom" required>
                    </div>

                    <div class="form-group">
                        <label for="LieuNaisse">Lieu de Naissance</label>
                        <input type="text" id="LieuNaisse" name="LieuNaisse" required>
                    </div>

                    <div class="form-group">
                        <label for="filiere">filiere</label>
                        <input type="text" id="filiere" name="filiere" required>
                    </div>
                    <div class="form-group">
                        <label for="genre">sexe</label>
                        <select id="genre" name="genre">
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Féminin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="classe">classe</label>
                        <input type="text" id="classe" name="classe" required>
                    </div>

                    <div class="form-group">
                        <label for="dateNaisse">Date de naissance</label>
                        <input type="date" id="dateNaisse" name="dateNaisse" required>
                    </div>

                    <input type="submit" name="enregistrer" value="enregistrer">

                </form>
            </div>
        </main>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>