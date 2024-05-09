<?php
include_once('./DB.php');

use Database\DB;

if (
    isset($_POST['email']) && !empty(isset($_POST['email']))
    &&
    isset($_POST['password']) && !empty(isset($_POST['password']))
) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $db = DB::getInstance();
    $personel = $db->select(
        'personnel',
        'email = ? AND mot_de_passe = ?',
        [$_POST['email'], $_POST['password']]
    );


    if (empty($personel)) {
        header("location:login.php");
    } else {
        if (!isset($_SESSION['userAuth'])) {
            session_start();
        }
        $_SESSION['userAuth'] = $personel[0]['id'];
        header("location:index.php");
    }
}
