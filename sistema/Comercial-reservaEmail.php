<?php require_once("funciones.php");

$xemail=leerParam("email","");
$xid=leerParam("id","");


$codigo = uniqid();

if (isset($xid)) {
    $xc = conectar();
    $sql = "UPDATE cliente SET cod_cliente='$codigo' WHERE id_cliente='$xid'";
    mysqli_query($xc,$sql);
    desconectar($xc);
    header("Location: prueba.php?email=$xemail");

}
    


    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "johnnbill123@hotmial.com";
    $to = "$xemail";
    $subject = "Familia Viajera Tour";
    $message = "Codigo de reserva: $codigo";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);

    //header("Location: prueba.php?email=$xemail_per_per");
?>