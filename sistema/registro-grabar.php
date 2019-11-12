<?php require_once("funciones.php");

$xaccion=leerParam("accion","");
$xid_sector=leerParam("id_sector","");

if ($xid_sector == "1"){

    if ($xaccion=="crear") {

        $xnom_per=leerParam("nom_per","");
        $xape_per=leerParam("ape_per","");
        $xdirec_per=leerParam("direc_per","");
        $xemail_per_per=leerParam("email_per_per","");
        $xemail_corp_per=leerParam("email_corp_per","");
        $xcel_per_per=leerParam("cel_per_per","");
        $xcel_corp_per=leerParam("cel_corp_per","");
        $xnac_per=leerParam("nac_per","");
        $xdni_per=leerParam("dni_per","");
        $xcargo_per=leerParam("cargo_per","");
        $xlog_per=leerParam("log_per","");
        $xpass_per=leerParam("pass_per","");
        $xestado_per=leerParam("estado_per","");
        
        $xid_sector=leerParam("id_sector","");
        $xid_tipo_per=leerParam("id_tipo_per","");
        $xid_area=leerParam("id_area","");
    
    
        $xc = conectar();
        $sql = "INSERT INTO persona (nom_per,ape_per,direc_per,email_per_per,email_corp_per,cel_per_per,cel_corp_per,nac_per,dni_per,cargo_per,log_per,pass_per,estado_per,id_sector,id_tipo_per,id_area) VALUES ('$xnom_per','$xape_per','$xdirec_per','$xemail_per_per','$xemail_corp_per','$xcel_per_per','$xcel_corp_per','$xnac_per','$xdni_per','$xcargo_per','$xcargo_per','$xlog_per','$xpass_per','$xestado_per','$xid_sector','$xid_tipo_per','$xid_area')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);
    
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
    }elseif ($xaccion=="") {//significa que estamos eliminadno el registro
        $xid_per= leerParam("xid_per","");
        $xc = conectar();
        $sql = "DELETE FROM persona WHERE id_per='$xid_per'";
        
        mysqli_query($xc,$sql);
        desconectar($xc);
    }

}elseif ($xid_sector == "2"){

    if ($xaccion=="crear") {

        $xnom_per=leerParam("nom_per","");
        $xape_per=leerParam("ape_per","");
        $xdirec_per=leerParam("direc_per","");
        $xemail_per_per=leerParam("email_per_per","");
        $xcel_per_per=leerParam("cel_per_per","");
        $xlog_per=leerParam("log_per","");
        $xpass_per=leerParam("pass_per","");
        $xestado_per=leerParam("estado_per","");
        
        $xid_sector=leerParam("id_sector","");
        $xid_tipo_per=leerParam("id_tipo_per","");
    
        $xc = conectar();
        $sql = "INSERT INTO persona (nom_per,ape_per,direc_per,email_per_per,cel_per_per,log_per,pass_per,estado_per,id_sector,id_tipo_per) VALUES ('$xnom_per','$xape_per','$xdirec_per','$xemail_per_per','$xcel_per_per','$xlog_per','$xpass_per','$xestado_per','$xid_sector','$xid_tipo_per')";
    
        mysqli_query($xc,$sql);
        desconectar($xc);
    
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
    }elseif ($xaccion=="") {//significa que estamos eliminadno el registro
        $xid_per= leerParam("xid_per","");
        $xc = conectar();
        $sql = "DELETE FROM persona WHERE id_per='$xid_per'";
        
        mysqli_query($xc,$sql);
        desconectar($xc);
    }

}

?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuario
                <?php 
                    if($xaccion == "crear"){
                        echo"<small>Registro Creado Correctamente</small>";
                    }
                    if($xaccion == "editar"){
                        echo"<small>Registro Editado Correctamente</small>";
                    }
                    if($xaccion == ""){
                        echo"<small>Registro Eliminado Correctamente</small>";
                    }
                ?>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="alumnos.php">Ver Alumnos</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>