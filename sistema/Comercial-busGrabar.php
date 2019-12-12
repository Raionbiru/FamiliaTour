<?php require_once("funciones.php");

$xid=leerParam("id","");
$xaccion=leerParam("accion","");

if ($xaccion=="crear") {

    $xcond_bus = leerParam("cond_bus","");
    $xmod_bus = leerParam("mod_bus","");
    $xcap_bus = leerParam("cap_bus","");
    $xplaca_bus = leerParam("placa_bus","");
    $xest_bus = leerParam("est_bus","");
    
    $xc = conectar();
    $sql = "INSERT INTO bus (cond_bus, mod_bus, cap_bus, placa_bus, est_bus) VALUES ('$xcond_bus','$xmod_bus','$xcap_bus','$xplaca_bus','$xest_bus')";

    mysqli_query($xc,$sql);
    desconectar($xc);
    header("Location: Comercial-bus.php");

}elseif ($xaccion=="editar") {

    $xcond_bus = leerParam("cond_bus","");
    $xmod_bus = leerParam("mod_bus","");
    $xcap_bus = leerParam("cap_bus","");
    $xplaca_bus = leerParam("placa_bus","");
    $xest_bus = leerParam("est_bus","");

    $xc = conectar();
    $sql = "UPDATE bus SET cond_bus = '$xcond_bus', mod_bus = '$xmod_bus', cap_bus = '$xcap_bus', placa_bus = '$xplaca_bus', est_bus = '$xest_bus' WHERE id_bus = '$xid'";

    mysqli_query($xc,$sql);
    desconectar($xc);
    header("Location: Comercial-bus.php");

}elseif ($xaccion=="eliminar") {
    $xc = conectar();
    $sql = "DELETE FROM bus WHERE id_bus='$xid'";
    mysqli_query($xc,$sql);
    desconectar($xc);
    header("Location: Comercial-bus.php");
}
?>