<?php require_once("funciones.php");

$xaccion=leerParam("accion","");
$xtipo=leerParam("tipo","");
$xid_sector=leerParam("id_sector","");

/*==============================*/
/*============EMPRESA===========*/
/*==============================*/
if ($xtipo == "persona") {
    if ($xaccion=="crear") {

        $xnom_per=leerParam("nom_per","");
        $xape_per=leerParam("ape_per","");
        $xdirec_per=leerParam("direc_per","");
        $xemail_per_per=leerParam("email_per_per","");
        $xcel_per_per=leerParam("cel_per_per","");
        $xdni_per=leerParam("dni_per","");
        $xcargo_per=leerParam("cargo_per","");
        $xpass_per=leerParam("pass_per","");
        $xid_area=leerParam("id_area","");

        $xc = conectar();
        $sql = "INSERT INTO persona (nom_per,ape_per,direc_per,email_per_per,cel_per_per,dni_per,cargo_per,pass_per,estado_per,id_area,notificacion_per,log_per) VALUES ('$xnom_per','$xape_per','$xdirec_per','$xemail_per_per','$xcel_per_per','$xdni_per','$xcargo_per','$xpass_per','0','$xid_area','0','$xemail_per_per')";
    
        mysqli_query($xc,$sql);
        $id_insert = mysqli_insert_id($xc);
        if ($_FILES["archivoCV"]["error"] > 0) {
            echo"Error al cargar el archivo";
        }else {
            $permitidos = array("application/pdf");
            $limite_kb = 450;
            if (in_array($_FILES["archivoCV"]["type"], $permitidos) && $_FILES["archivoCV"]["size"] <= $limite_kb * 1024) {

                $ruta = 'Doc/CV/'.$id_insert.'/';
                $archivo = $ruta.$_FILES["archivoCV"]["name"];

                if (!file_exists($ruta)) {
                    mkdir($ruta);
                }
                if (!file_exists($archivo)) {
                    $resultado = @move_uploaded_file($_FILES["archivoCV"]["tmp_name"],$archivo);
                    if ($resultado) {
                        echo "Archivo guardado.";
                        
                    }else{
                        echo "Error al guardar el archivo.";
                    }
                }else {
                    echo "Archivo ya existe.";
                }
            }else{
                echo "Archivo no permitido o excede el tamaño.";
            }
        }
        
        desconectar($xc);

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "johnnbill123@hotmial.com";
        $to = "$xemail_per_per";
        $subject = "Familia Viajera Tour";
        $message = "Se esta evaluando la solicitud de su cuenta para que pueda acceder Empresa, Señor: $xnom_per, $xape_per";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);

        //header("Location: prueba.php?email=$xemail_per_per");
    
    }elseif ($xaccion=="editar") {
        $xid_per= leerParam("id_per","");
        $xnom_per=leerParam("nom_per","");
        $xape_per=leerParam("ape_per","");
        $xdni_per=leerParam("dni_per","");
        $xfec_nac_per=leerParam("fec_nac_per","");
        $xsex_per=leerParam("sex_per","");
        $xemail_per=leerParam("email_per","");
        $xcel_per=leerParam("cel_per","");
        $xdir_per=leerParam("dir_per","");
        $xlog_per=leerParam("log_per","");
        $xpass_per=leerParam("pass_per","");
        $xc = conectar();
        $sql = "UPDATE persona SET nom_per='$xnom_per',ape_per='$xape_per',dni_per='$xdni_per',fec_nac_per='$xfec_nac_per',sex_per='$xsex_per',email_per='$xemail_per',cel_per='$xcel_per',dir_per='$xdir_per',log_per='$xlog_per',pass_per='$xpass_per' WHERE id_per='$xid_per'";
        // echo "CONSULTA -> $sql";
        // die();
        mysqli_query($xc,$sql);
        desconectar($xc);
    }elseif ($xaccion=="") {
        $xid_per= leerParam("xid_per","");
        $xc = conectar();
        $sql = "DELETE FROM persona WHERE id_per='$xid_per'";
        
        mysqli_query($xc,$sql);
        desconectar($xc);
    }
}
elseif ($xtipo == "agencia"){
    if ($xaccion =="crear") {

        $xempr_cliente      =leerParam("empr_cliente","");
        $xruc_empr_cliente  =leerParam("ruc_empr_cliente","");
        $xdirec_cliente     =leerParam("direc_cliente","");
        $xweb_empr_cliente  =leerParam("web_empr_cliente","");
        $xape_cliente       =leerParam("ape_cliente","");
        $xnom_cliente       =leerParam("nom_cliente","");
        $xcel_cliente       =leerParam("cel_cliente","");
        $xemail_cliente     =leerParam("email_cliente","");
        $xpas_cliente       =leerParam("pas_cliente","");
         
        $xc = conectar();
        $sql = "INSERT INTO cliente (empr_cliente,ruc_empr_cliente,direc_cliente,web_empr_cliente,ape_cliente,nom_cliente,cel_cliente,email_cliente,pas_cliente,estado_cliente,notificacion_cliente) VALUES ('$xempr_cliente','$xruc_empr_cliente','$xdirec_cliente','$xweb_empr_cliente','$xape_cliente','$xnom_cliente','$xcel_cliente','$xemail_cliente','$xpas_cliente','0','0')";
    
        mysqli_query($xc,$sql);

        desconectar($xc);

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "johnnbill123@hotmial.com";
        $to = "$xemail_cliente";
        $subject = "Familia Viajera Tour";
        $message = "La empresa esta evaluando su ingreso Agencia: $xempr_cliente, Señor: $xnom_cliente $xape_cliente";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        //echo "Se envio un correo.";
        
        header("Location: prueba.php?email=$xemail_cliente");
    
    }elseif ($xaccion=="editar") {
        $xid_per= leerParam("id_per","");
        $xnom_per=leerParam("nom_per","");
        $xape_per=leerParam("ape_per","");
        $xdni_per=leerParam("dni_per","");
        $xfec_nac_per=leerParam("fec_nac_per","");
        $xsex_per=leerParam("sex_per","");
        $xemail_per=leerParam("email_per","");
        $xcel_per=leerParam("cel_per","");
        $xdir_per=leerParam("dir_per","");
        $xlog_per=leerParam("log_per","");
        $xpass_per=leerParam("pass_per","");
        $xc = conectar();
        $sql = "UPDATE persona SET nom_per='$xnom_per',ape_per='$xape_per',dni_per='$xdni_per',fec_nac_per='$xfec_nac_per',sex_per='$xsex_per',email_per='$xemail_per',cel_per='$xcel_per',dir_per='$xdir_per',log_per='$xlog_per',pass_per='$xpass_per' WHERE id_per='$xid_per'";
        // echo "CONSULTA -> $sql";
        // die();
        mysqli_query($xc,$sql);
        desconectar($xc);
    }elseif ($xaccion=="eliminar") {
        $xid_per= leerParam("xid_per","");
        $xc = conectar();
        $sql = "DELETE FROM persona WHERE id_per='$xid_per'";
        
        mysqli_query($xc,$sql);
        desconectar($xc);
    }
}

?>