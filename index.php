<?php

use Database\DB;

session_start();
if (isset($_SESSION['userAuth'])) {
    include_once('./DB.php');
    $db = DB::getInstance();
    $personels = $db->select('personnel', 'id = ?', [$_SESSION['userAuth']]);
    $personel = $personels[0];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>

<body>
    <?php include('header.php'); ?>

    <div id="main-container">
        <?php include('menu.php'); ?>
        <main>
            <div class="content_wrapper">
                <h1>Accueil</h1>
                <?php if (isset($personel)) { ?>
                    <h2>BIENVENU(e) Mr <?= strtoupper($personel['nom']) ?></h2>
                <?php } ?>
                <h2>Description du Projet</h2>
                <p>Notre projet consiste à créer un site web de gestion pour notre université, offrant un système complet pour les étudiants, le corps professoral et l'administration.</p>
                <p>Sur ce site, vous pourrez :</p>
                <ul>
                    <li>Consulter les programmes académiques offerts</li>
                    <li>Accéder aux informations sur les cours et les horaires</li>
                    <li>Effectuer des inscriptions en ligne</li>
                    <li>Accéder à des ressources pédagogiques et documents de cours</li>
                    <li>Consulter les événements et activités universitaires</li>
                    <li>Contacter les départements et le personnel administratif</li>
                    <li>Et bien plus encore...</li>
                </ul>
                <p>Ce site vise à simplifier la gestion académique et à améliorer l'expérience des étudiants, du corps enseignant et du personnel administratif.</p>
            </div>


        </main>
    </div>
    <?php //include('footer.php'); ?>
</body>

</html>