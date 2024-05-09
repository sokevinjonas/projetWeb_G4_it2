<?php

use Database\DB;

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$LieuNaisse = $_POST['LieuNaisse'];
$filiere = $_POST['filiere'];
$genre = $_POST['genre'];
$classe = $_POST['classe'];
$dateNaisse = $_POST['dateNaisse'];

if (
    !empty($nom)  &&
    !empty($prenom)
    && !empty($LieuNaisse)
    && !empty($filiere)
    && !empty($genre) &&
    !empty($dateNaisse)
) {
    include_once('./DB.php');
    $db = DB::getInstance();
    $db->insert('etudiant', [
        'nom' =>  $nom,
        'prenom' => $prenom,
        'lieuNaissance' => $LieuNaisse,
        'filiere' => $filiere,
        'genre' => $genre,
        'classe' => $classe,
        'dateNaissance' => $dateNaisse
    ]);
    header("location:etudiant_index.php");
} else {
    echo " <h3> Erreur!!! Un ou Plusieurs champs est vide. </h3>";
}
