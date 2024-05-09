<?php
if (!isset($_SESSION['userAuth'])) {
    session_start();

    unset($_SESSION['userAuth']);
    header("location:index.php");
}
