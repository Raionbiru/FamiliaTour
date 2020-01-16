<?php session_start();
    if (!isset($_SESSION["rol"])){
        header("Location:index.php");
    }else {
        if ($_SESSION["rol"] != 3) {
            header("Location:index.php");
        }
    }
?>