<?php

use Database\DB;

if (isset($_POST['id']) && !empty($_POST['id'])) {

    $id = $_POST['id'];

    include_once('./DB.php');


    $db = DB::getInstance();
    $db->delete('personnel', 'id = ?', [$id]);

    header('location:personnel_index.php');
}
