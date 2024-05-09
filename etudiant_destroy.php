<?php

use Database\DB;

if (isset($_POST['matricule']) && !empty($_POST['matricule'])) {

    $matricule = $_POST['matricule'];

    include_once('./DB.php');


    $db = DB::getInstance();
    $db->delete('etudiant', 'matricule = ?', [$matricule]);

    header('location:etudiant_index.php');
}
