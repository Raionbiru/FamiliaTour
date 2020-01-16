<?PHP session_start();
    if ($_SESSION["estadoCliente"] == 0){
        header("Location:index.php");
    }
?>