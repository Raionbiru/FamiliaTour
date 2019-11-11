<?php require_once("funciones.php");

$xaccion=leerParam("accion","");

if ($xaccion=="desactivar") {
    $xid_per= leerParam("id_per","");
    $xc = conectar();
    $sql = "UPDATE persona SET estado_per='0' WHERE id_per='$xid_per'";
    // echo "CONSULTA -> $sql";
    // die();
    mysqli_query($xc,$sql);
    desconectar($xc);
}elseif ($xaccion=="activar") {
    $xid_per= leerParam("id_per","");
    $xc = conectar();
    $sql = "UPDATE persona SET estado_per='1' WHERE id_per='$xid_per'";
    // echo "CONSULTA -> $sql";
    // die();
    mysqli_query($xc,$sql);
    desconectar($xc);
}

?>

<h1>
    Estado
    <?php 
        if($xaccion == "desactivar"){
            echo"<small>Se desactivo la cuenta</small>";
        }
        if($xaccion == "activar"){
            echo"<small>Cuenta activada</small>";

            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $from = "johnnbill123@hotmial.com";
            $to = "johnn.condori@tecsup.edu.pe";
            $subject = "Prueba PHP Mail";
            $message = "Prueba de PHP";
            $headers = "From:" . $from;
            mail($to,$subject,$message, $headers);
            echo "Se envio un correo.";

        }
    ?>
</h1>
