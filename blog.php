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
    <title>Blog</title>
</head>

<body>
    <?php include('header.php'); ?>

    <div id="main-container">
        <?php include('menu.php'); ?>
        <main>
            <div class="content_wrapper">
                <h1>Blog</h1>
                <p>
                    1. Page d'accueil :</br>
                    - Présentation de l'université et de ses valeurs</br>
                    - Mise en avant des actualités et événements à venir</br>
                    - Liens vers les différentes sections du blog
                </p>
                <p>
                    2. Rubrique "Formations" :</br>
                    - Présentation des différents programmes d'études offerts par l'université</br>
                    - Informations pratiques sur les inscriptions, les bourses et les échanges internationaux</br>
                </p>
                <p>
                    3. Rubrique "Vie étudiante" :</br>
                    - Articles sur les activités culturelles, sportives et associatives proposées aux étudiants</br>
                    - Conseils pratiques pour réussir ses études et s'épanouir sur le campus


                </p>
            </div>
        </main>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>