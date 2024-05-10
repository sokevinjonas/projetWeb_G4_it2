included("/include/header.php");
included("/include/menu.php");
<main>
    <div class="head-title">
        <div class="left">
            <h1>Bievenue</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Gestion Etudiant</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Liste des Etudiants</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Liste des etudiants</h3>
                <a href="">Ajouter un nouvel etudiant</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom & Prenom (s)</th>
                        <th>Filiere</th>
                        <th>Classe</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10063922</td>
                        <td>So Kevin Jonas</td>
                        <td>IT</td>
                        <td>L2</td>
                        <td>
                            <button>Voir</button>
                            <button>Modifier</button>
                            <button>Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
included("/include/footer.php");