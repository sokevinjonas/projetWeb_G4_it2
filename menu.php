<div id="sidebar">
    <nav>
        <ul>
            <li>
                <a href="index.php">Accueil</a>
            </li>
            <li>
                <a href="blog.php">Blog</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <?php if (isset($_SESSION['userAuth'])) { ?>
                <li>
                    <a href="personnel_index.php">Personnel</a>
                </li>
                <li>
                    <a href="etudiant_index.php">Etudiant</a>
                </li>
                <li>
                    <a href="logout.php">Deconnection</a>
                </li>
            <?php } else { ?>
                <?php if ($_SERVER['REQUEST_URI'] == '/index.php') { ?>

                    <li>
                        <a href="login.php">Veuillez-vous connecter sur notre site</a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </nav>
</div>