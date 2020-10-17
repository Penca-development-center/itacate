<?php session_start();
    if( isset($_SESSION['usuario'])) {
        header('location: ./pages/profile/profile.php');
    } else {
        header('location: ./register.php');
    }
?>