<?php
if (!isset($_SESSION['userAuth'])) {
    session_start();
}

include_once('./DB.php');

use Database\DB;

$db = DB::getInstance();
$etudiants = $db->select('etudiant');
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
                <div style="padding: 0.5rem; display:flex; justify-content:end">
                    <a href="./etudiant_create.php">
                        <button type="button" class="btn">Enregistrer un etudiant</button>
                    </a>
                </div>
                <table>
                    <caption>Liste du etudiants</caption>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom(s)</th>
                            <th>Lieu de Naissance</th>
                            <th>Filiere </th>
                            <th>Genre</th>
                            <th>Classe</th>
                            <th>Date de Naissance</th>
                            <th>Date d'inscription</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($etudiants))
                            foreach ($etudiants as $etudiant) {
                        ?>
                            <tr>
                                <td><?= $etudiant['nom'] ?></td>
                                <td><?= $etudiant['prenom'] ?></td>
                                <td><?= $etudiant['lieuNaissance'] ?></td>
                                <td><?= $etudiant['filiere'] ?></td>
                                <td><?= $etudiant['genre'] ?></td>
                                <td><?= $etudiant['classe'] ?></td>
                                <td><?= $etudiant['dateNaissance'] ?></td>
                                <td><?= $etudiant['dateInscription'] ?></td>
                                <td>
                                    <a href="etudiant_edit.php?matricule=<?= $etudiant['matricule'] ?>">
                                        <button class="btn">Modifier</button>
                                    </a>
                                    <button class="btnDelete btn" data-id="<?= $etudiant['matricule'] ?>">Supprimer</button>
                                </td>
                            </tr>
                        <?php
                            }
                        else {
                        ?>
                            <tr class="empty-row" style="text-align: center;">
                                <td colspan="9">vide</td>
                            </tr>
                        <?php

                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <?php include('footer.php'); ?>
    <script>
        const btnDelete = document.querySelectorAll('.btnDelete');

        function deleteItem(event) {
            var confirmation = confirm("Voulez-vous vraiment supprimer cet utilisateur ?");
            if (confirmation) {
                const itemId = event.target.getAttribute('data-id');
                const newForm = document.createElement('form');
                newForm.action = './etudiant_destroy.php';
                newForm.method = 'POST';
                const newInput = document.createElement('input');
                newInput.type = 'hidden';
                newInput.name = 'matricule';
                newInput.value = itemId;
                newForm.appendChild(newInput);
                document.body.appendChild(newForm);
                newForm.submit();
                document.body.removeChild(newForm);
            }

        }

        btnDelete.forEach((item) => {
            item.addEventListener('click', deleteItem);
        });
    </script>
</body>

</html>