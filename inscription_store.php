<?php

use Database\DB;

include_once('./DB.php');
if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['date_de_naissance']) &&
    isset($_POST['pays']) &&
    isset($_POST['email']) &&
    isset($_POST['mot_de_passe'])
) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $pays = $_POST['pays'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $db = DB::getInstance();

    $db->insert('personnel',[
        'nom' => $nom,
        'prenom' => $prenom,
        'date_de_naissance' => $date_de_naissance,
        'pays' => $pays,
        'email' => $email,
        'mot_de_passe' => $mot_de_passe
    ]);

    header("location:login.php");
} else {
    echo "Veuillez vous inscrire.";
}
