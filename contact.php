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
    <title>Contact</title>
</head>

<body>
    <?php include('header.php'); ?>

    <div id="main-container">
        <?php include('menu.php'); ?>
        <main>
            <div class="content_wrapper">
                <h1>Contact</h1>
                <p>
                    C'est un plaisir de vous accueillir sur notre page de contact.</br>
                    N'hésitez pas à nous laisser un message, nous vous répondrons dans les plus brefs délais</br>
                </p>
                <ul>
                    <li>06 BP 9283 Ouagadougou 06 - Burkina faso</li>
                    <li>tel +226 64041958</li>
                    <li>tel +226 63846112</li>
                    <li>E-mail: info@u-auben.com</li>
                    <li>Site web: www.u-auben.com</li>
                </ul>
            </div>
        </main>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>