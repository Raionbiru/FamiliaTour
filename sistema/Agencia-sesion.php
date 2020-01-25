<?PHP session_start();
    if (isset($_SESSION["estadoCliente"])) {
        
        if ($_SESSION["estadoCliente"] == 0){
            header("Location:index.php");
        }
    }else {
        header("Location:index.php");
    }
    
?>