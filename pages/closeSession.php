<?php session_start();

    if(isset($_SESSION['usuario'])) {
        session_destroy();
        header('location: ../index.php');       
    } else {
        header('location: ../index.php');       
    }

    session_destroy();  
?>