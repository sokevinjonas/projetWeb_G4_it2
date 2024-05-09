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
                <form action="./login_store.php" method="post">
                    <h3>login now</h3>
                    <input type="text" name="email" required placeholder="entrez votre email">
                    <input type="password" name="password" required placeholder="entrez votre mot de passe">
                    <input type="submit" name="submit" class="btn">
                </form>
                <div style="display: flex; justify-content:end; margin-top: 1rem;">
                    <p>vous n'avez pas de compte? <a href="inscription.php" class="btn">s'inscrire</a></p>

                </div>
            </div>
        </main>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>