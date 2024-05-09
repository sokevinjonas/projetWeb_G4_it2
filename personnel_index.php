<?php
if (!isset($_SESSION['userAuth'])) {
    session_start();
}
?>
<?php
include_once('./DB.php');

use Database\DB;

$db = DB::getInstance();
$personels = $db->select('personnel');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste du personnel</title>
</head>

<body>
    <?php include('header.php'); ?>

    <div id="main-container">
        <?php include('menu.php'); ?>
        <main>
            <div class="content_wrapper">
                <table>
                    <caption>Liste du personnels</caption>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom(s)</th>
                            <th>Date de Naissance</th>
                            <th> Pays </th>
                            <th> Mail </th>
                            <th>Password</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($personels))
                            foreach ($personels as $personel) {
                        ?>
                            <tr>
                                <td><?= $personel['nom'] ?></td>
                                <td><?= $personel['prenom'] ?></td>
                                <td><?= $personel['date_de_naissance'] ?></td>
                                <td><?= $personel['pays'] ?></td>
                                <td><?= $personel['email'] ?></td>
                                <td><?= $personel['mot_de_passe'] ?></td>
                                <td>
                                    <a href="personnel_edit.php?id=<?= $personel['id'] ?>">
                                        <button class="btn">Modifier</button>
                                    </a>
                                    <button class="btn btnDelete" data-id="<?= $personel['id'] ?>">Supprimer</button>
                                </td>
                            </tr>
                        <?php
                            }
                        else {
                        ?>
                            <tr class="empty-row" style="text-align: center;">
                                <td colspan="7">vide</td>
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
                newForm.action = './personnel_destroy.php';
                newForm.method = 'POST';
                const newInput = document.createElement('input');
                newInput.type = 'hidden';
                newInput.name = 'id';
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