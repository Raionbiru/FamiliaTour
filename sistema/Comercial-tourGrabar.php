<?php require_once("funciones.php");

$xaccion=leerParam("accion","");
$xid=leerParam("id","");

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
    header("Location: Comercial-tours.php");

}elseif ($xaccion=="editar") {

    $xnom_tour=leerParam("nom_tour","");
    $xprec_tour=leerParam("prec_tour","");
    $xdescp_tour=leerParam("descp_tour","");

    $xc = conectar();
    $sql = "UPDATE tour SET nom_tour='$xnom_tour',prec_tour='$xprec_tour',descp_tour='$xdescp_tour' WHERE id_tour='$xid'";
    mysqli_query($xc,$sql);
    desconectar($xc);
    header("Location: Comercial-tours.php");

}elseif ($xaccion=="eliminar") {

    $xc = conectar();
    $sql = "DELETE FROM tour WHERE id_tour='$xid'";
    mysqli_query($xc,$sql);
    desconectar($xc);
    header("Location: Comercial-tours.php");

}

?>