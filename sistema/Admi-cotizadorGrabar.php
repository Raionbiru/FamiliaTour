<?php require_once("funciones.php");

$xid=leerParam("id","");
$xtipo=leerParam("tipo","");
$xaccion=leerParam("accion","");

if ($xtipo == "hostal") {
    if ($xaccion=="crear") {
        $xnom_hostal=leerParam("nom_hostal","");
        $xclase_hostal=leerParam("clase_hostal","");
        $xtipo_hostal=leerParam("tipo_hostal","");
        $xlugar_hostal=leerParam("lugar_hostal","");
        $xprec_hostal=leerParam("prec_hostal","");
        $xprec_var_hostal=leerParam("prec_var_hostal","");
        
        $xc = conectar();
        $sql = "INSERT INTO hostal (nom_hostal,clase_hostal,tipo_hostal,lugar_hostal,prec_hostal,prec_var_hostal) VALUES ('$xnom_hostal','$xclase_hostal','$xtipo_hostal','$xlugar_hostal','$xprec_hostal','$xprec_var_hostal')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    
    }elseif ($xaccion=="editar") {
        $xprec_hostal= leerParam("prec_hostal","");
        $xprec_var_hostal= leerParam("prec_var_hostal","");
        $xc = conectar();
        $sql = "UPDATE hostal SET prec_hostal='$xprec_hostal',prec_var_hostal='$xprec_var_hostal' WHERE id_hostal='$xid'";
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    }elseif ($xaccion=="eliminar") {
        $xc = conectar();
        $sql = "DELETE FROM hostal WHERE id_hostal='$xid'";
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    }
}
elseif ($xtipo == "transporte"){

    if ($xaccion=="crear") {

        $xnom_transporte=leerParam("nom_transporte","");
        $xtipo_transporte=leerParam("tipo_transporte","");
        $xsalida_transporte=leerParam("salida_transporte","");
        $xdes_transporte=leerParam("des_transporte","");
        $xprec_transporte=leerParam("prec_transporte","");
        $xprec_var_transporte=leerParam("prec_var_transporte","");
         
        $xc = conectar();
        $sql = "INSERT INTO transporte (nom_transporte,tipo_transporte,salida_transporte,des_transporte,prec_transporte,prec_var_transporte) VALUES ('$xnom_transporte','$xtipo_transporte','$xsalida_transporte','$xdes_transporte','$xprec_transporte','$xprec_var_transporte')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    
    }elseif ($xaccion=="editar") {
        $xprec_transporte= leerParam("prec_transporte","");
        $xprec_var_transporte= leerParam("prec_var_transporte","");
        $xc = conectar();
        $sql = "UPDATE transporte SET prec_transporte='$xprec_transporte',prec_var_transporte='$xprec_var_transporte' WHERE id_transporte='$xid'";

        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    }elseif ($xaccion=="eliminar") {
        $xc = conectar();
        $sql = "DELETE FROM transporte WHERE id_transporte='$xid'";
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    }

}
elseif ($xtipo == "comidas"){
    if ($xaccion=="crear") {

        $xtipo_comidas=leerParam("tipo_comidas","");
        $xcarta_comidas=leerParam("carta_comidas","");
        $xprecio_comidas=leerParam("precio_comidas","");
        $xprecio_variado_comidas=leerParam("precio_variado_comidas","");
         
        $xc = conectar();
        $sql = "INSERT INTO comidas (tipo_comidas,carta_comidas,precio_comidas,precio_variado_comidas) VALUES ('$xtipo_comidas','$xcarta_comidas','$xprecio_comidas','$xprecio_variado_comidas')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    }elseif ($xaccion=="editar") {
        $xprec_comidas= leerParam("precio_comidas","");
        $xprec_variado_comidas= leerParam("precio_variado_comidas","");
        $xc = conectar();
        $sql = "UPDATE comidas SET precio_comidas='$xprec_comidas',precio_variado_comidas='$xprec_variado_comidas' WHERE id_comidas='$xid'";
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    }elseif ($xaccion=="eliminar") {
        $xc = conectar();
        $sql = "DELETE FROM comidas WHERE id_comidas='$xid'";
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    }
}
elseif ($xtipo == "servicio"){
    if ($xaccion=="crear") {

        $xnom_serv_plus=leerParam("nom_serv_plus","");
        $xtipo_serv_plus=leerParam("tipo_serv_plus","");
        $xprec_serv_plus=leerParam("prec_serv_plus","");
        $xprec_var_serv_plus=leerParam("prec_var_serv_plus","");
         
        $xc = conectar();
        $sql = "INSERT INTO servicioplus (nom_serv_plus,tipo_serv_plus,prec_serv_plus,prec_var_serv_plus) VALUES ('$xnom_serv_plus','$xtipo_serv_plus','$xprec_serv_plus','$xprec_var_serv_plus')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    
    }elseif ($xaccion=="editar") {
        $xprec_serv_plus= leerParam("prec_serv_plus","");
        $xprec_var_serv_plus= leerParam("prec_var_serv_plus","");
        $xc = conectar();
        $sql = "UPDATE servicioplus SET prec_serv_plus='$xprec_serv_plus',prec_var_serv_plus='$xprec_var_serv_plus' WHERE id_serv_plus='$xid'";

        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    }elseif ($xaccion=="eliminar") {
        $xc = conectar();
        $sql = "DELETE FROM servicioplus WHERE id_serv_plus='$xid'";
        
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    }
}

?>