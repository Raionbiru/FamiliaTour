<?php require_once("funciones.php");

$xaccion=leerParam("accion","");
$xtipo=leerParam("tipo","");

if ($xtipo == "cliente") {

    if ($xaccion=="desactivar") {
        $xid_cliente= leerParam("id_cliente","");
        $xc = conectar();
        //$sql = "UPDATE cliente SET estado_cliente='0' WHERE id_cliente='$xid_cliente'"
        $sql = "DELETE FROM cliente WHERE id_cliente='$xid_cliente'";
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-accesousuario.php");

    }elseif ($xaccion=="activar") {
        $xid_cliente= leerParam("id_cliente","");
        $xc = conectar();
        $sql = "UPDATE cliente SET estado_cliente='1' WHERE id_cliente='$xid_cliente'";
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-accesousuario.php");
    }

}else{

    if ($xaccion=="desactivar") {
        
        $xid_per= leerParam("id_per","");
        $xc = conectar();
        $sql = "DELETE FROM persona WHERE id_per='$xid_per'";
        // echo "CONSULTA -> $sql";
        // die();
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-registro.php");

    }elseif ($xaccion=="activar") {
        $xid_per= leerParam("id_per","");
        $xc = conectar();
        $sql = "UPDATE persona SET estado_per='1' WHERE id_per='$xid_per'";
        // echo "CONSULTA -> $sql";
        // die();
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-registro.php");
    }    
}

?>