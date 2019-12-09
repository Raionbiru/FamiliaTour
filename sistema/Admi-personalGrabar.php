<?php require_once("funciones.php");

$xid=leerParam("id","");
$xaccion=leerParam("accion","");

if ($xaccion=="crear") {
    $xnom_hostal=leerParam("nom_hostal","");
    $xclase_hostal=leerParam("clase_hostal","");
    $xtipo_hostal=leerParam("tipo_hostal","");
    $xlugar_hostal=leerParam("lugar_hostal","");
    $xprec_hostal=leerParam("prec_hostal","");
    
    $xc = conectar();
    $sql = "INSERT INTO jornal (nom_hostal,clase_hostal,tipo_hostal,lugar_hostal,prec_hostal) VALUES ('$xnom_hostal','$xclase_hostal','$xtipo_hostal','$xlugar_hostal','$xprec_hostal')";

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