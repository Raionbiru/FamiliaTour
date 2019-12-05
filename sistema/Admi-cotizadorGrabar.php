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
        
        $xc = conectar();
        $sql = "INSERT INTO hostal (nom_hostal,clase_hostal,tipo_hostal,lugar_hostal,prec_hostal) VALUES ('$xnom_hostal','$xclase_hostal','$xtipo_hostal','$xlugar_hostal','$xprec_hostal')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    
    }elseif ($xaccion=="editar") {
        $xprec_hostal= leerParam("prec_hostal","");
        $xc = conectar();
        $sql = "UPDATE hostal SET prec_hostal='$xprec_hostal' WHERE id_hostal='$xid'";
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
         
        $xc = conectar();
        $sql = "INSERT INTO transporte (nom_transporte,tipo_transporte,salida_transporte,des_transporte,prec_transporte) VALUES ('$xnom_transporte','$xtipo_transporte','$xsalida_transporte','$xdes_transporte','$xprec_transporte')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);
        header("Location: Admi-cotizador.php");
    
    }elseif ($xaccion=="editar") {
        $xprec_transporte= leerParam("prec_transporte","");
        $xc = conectar();
        $sql = "UPDATE transporte SET prec_transporte='$xprec_transporte' WHERE id_transporte='$xid'";

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

        $xempr_cliente=leerParam("empr_cliente","");
        $xruc_empr_cliente=leerParam("ruc_empr_cliente","");
        $xdirec_cliente=leerParam("direc_cliente","");
        $xweb_empr_cliente=leerParam("web_empr_cliente","");
        $xape_cliente=leerParam("ape_cliente","");
        $xnom_cliente=leerParam("nom_cliente","");
        $xcel_cliente=leerParam("cel_cliente","");
        $xemail_cliente=leerParam("email_cliente","");
        $xpas_cliente=leerParam("pas_cliente","");
        $xestado_cliente=leerParam("estado_cliente","");
         
        $xc = conectar();
        $sql = "INSERT INTO cliente (empr_cliente,ruc_empr_cliente,direc_cliente,web_empr_cliente,ape_cliente,nom_cliente,cel_cliente,email_cliente,pas_cliente,estado_cliente) VALUES ('$xempr_cliente','$xruc_empr_cliente','$xdirec_cliente','$xweb_empr_cliente','$xape_cliente','$xnom_cliente','$xcel_cliente','$xemail_cliente','$xpas_cliente','0')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "johnnbill123@hotmial.com";
        $to = "johnn.condori@tecsup.edu.pe";
        $subject = "Familia Viajera Tour";
        $message = "Se esta evaluando la solicitud de su cuenta - Agencia, Señor: $xnom_cliente $xape_cliente";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        echo "Se envio un correo.";
    
    }elseif ($xaccion=="editar") {
        $xprec_comidas= leerParam("precio_comidas","");
        $xc = conectar();
        $sql = "UPDATE comidas SET precio_comidas='$xprec_comidas' WHERE id_comidas='$xid'";
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

        $xempr_cliente=leerParam("empr_cliente","");
        $xruc_empr_cliente=leerParam("ruc_empr_cliente","");
        $xdirec_cliente=leerParam("direc_cliente","");
        $xweb_empr_cliente=leerParam("web_empr_cliente","");
        $xape_cliente=leerParam("ape_cliente","");
        $xnom_cliente=leerParam("nom_cliente","");
        $xcel_cliente=leerParam("cel_cliente","");
        $xemail_cliente=leerParam("email_cliente","");
        $xpas_cliente=leerParam("pas_cliente","");
        $xestado_cliente=leerParam("estado_cliente","");
         
        $xc = conectar();
        $sql = "INSERT INTO cliente (empr_cliente,ruc_empr_cliente,direc_cliente,web_empr_cliente,ape_cliente,nom_cliente,cel_cliente,email_cliente,pas_cliente,estado_cliente) VALUES ('$xempr_cliente','$xruc_empr_cliente','$xdirec_cliente','$xweb_empr_cliente','$xape_cliente','$xnom_cliente','$xcel_cliente','$xemail_cliente','$xpas_cliente','0')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "johnnbill123@hotmial.com";
        $to = "johnn.condori@tecsup.edu.pe";
        $subject = "Familia Viajera Tour";
        $message = "Se esta evaluando la solicitud de su cuenta - Agencia, Señor: $xnom_cliente $xape_cliente";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        echo "Se envio un correo.";
    
    }elseif ($xaccion=="editar") {
        $xprecio_serv_plus= leerParam("precio_serv_plus","");
        $xc = conectar();
        $sql = "UPDATE servicioplus SET precio_serv_plus='$xprecio_serv_plus' WHERE id_serv_plus='$xid'";

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