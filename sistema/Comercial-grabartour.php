<?php require_once("funciones.php");

$xaccion=leerParam("accion","");

    if ($xaccion=="crear") {

        $xnom_tour=leerParam("nom_tour","");
        $xprec_tour=leerParam("prec_tour","");
        $xdescp_tour=leerParam("descp_tour","");
    
        $xc = conectar();
        $sql = "INSERT INTO tour (nom_tour,prec_tour,descp_tour) VALUES ('$xnom_tour','$xprec_tour','$xdescp_tour')";
    
        mysqli_query($xc,$sql);

        $id_insert = mysqli_insert_id($xc);
        if ($_FILES["archivo"]["error"] > 0) {
            echo"Error al cargar el archivo";
        }else {
            $permitidos = array("image/gif", "image/png", "image/jpg");
            $limite_kb = 200;
            if (in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024) {
                $ruta = 'assets/images/'.$id_insert.'/';
                $archivo = $ruta.$_FILES["archivo"]["name"];
    
                if (!file_exists($ruta)) {
                    mkdir($ruta);
                }
    
                if (!file_exists($archivo)) {
                    $resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivo);
    
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

?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuario
                <?php 
                    if($xaccion == "crear"){
                        echo"<small>Tour Creado Correctamente</small>";
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