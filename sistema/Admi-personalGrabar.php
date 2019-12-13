<?php require_once("funciones.php");

$xid=leerParam("id","");
$xaccion=leerParam("accion","");

if ($xaccion=="crear") {
    $xid_per=leerParam("id_per","");
    $xhor_tra_jor=leerParam("hor_tra_jor","");
    $xviat_jor=leerParam("viat_jor","");
    $xsueldo_jor=leerParam("sueldo_jor","");
    $xpago_variado_jor=leerParam("pago_variado_jor","");
    $xfec_jor= date("Y-m-d");
    
    $xc = conectar();
    $sql = "INSERT INTO jornal (id_per, hor_tra_jor, viat_jor, sueldo_jor, pago_variado_jor, fec_jor) VALUES ('$xid_per','$xhor_tra_jor','$xviat_jor','$xsueldo_jor','$xpago_variado_jor','$xfec_jor')";

    mysqli_query($xc,$sql);
    desconectar($xc);
    header("Location: Admi-personal.php");

}elseif ($xaccion=="editar") {

    $xhor_tra_jor = leerParam("hor_tra_jor","");
    $xviat_jor = leerParam("viat_jor","");
    $xsueldo_jor = leerParam("sueldo_jor","");
    $xpago_variado_jor = leerParam("pago_variado_jor","");

    $xc = conectar();
    $sql = "UPDATE jornal SET hor_tra_jor = '$xhor_tra_jor', viat_jor = '$xviat_jor', sueldo_jor = '$xsueldo_jor', pago_variado_jor = '$xpago_variado_jor' WHERE id_jor = '$xid'";

    mysqli_query($xc,$sql);
    desconectar($xc);
    header("Location: Admi-personal.php");

}elseif ($xaccion=="eliminar") {
    $xc = conectar();
    $sql = "DELETE FROM jornal WHERE id_hostal='$xid'";
    mysqli_query($xc,$sql);
    desconectar($xc);
    header("Location: Admi-personal.php");
}
?>