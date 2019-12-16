<?php /*require_once("funciones.php");

$xaccion=leerParam("accion","");
$xid=leerParam("id","");

$xusuario=leerParam("usuario","");
$xrespuesta=leerParam("respuesta","");

echo $xusuario   $xrespuesta;

if ($xusuario == "Johnn") {
    $xc = conectar();
    $sql = "INSERT INTO test (uno_test) VALUES ('$xrespuesta')";
    mysqli_query($xc,$sql);
    desconectar($xc);
}

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

}*/


require_once("funciones.php");

$page = leerParam("p","");

if ($page == "add") {
    echo "Entro";
    $name = leerParam("nm","");
    $datodos = leerParam("dd","");
    $datotres = leerParam("dt","");
    $xc = conectar();
    $sql = "INSERT INTO test (uno_test, dos_test, tres_test) VALUES ('$name','$datodos','$datotres')";
    mysqli_query($xc,$sql);
    desconectar($xc);
}else{
    $xc = conectar();
    $sqlTest = "SELECT * FROM test";
    $resTest = mysqli_query($xc,$sqlTest);
    
    while($filaTest=mysqli_fetch_array($resTest)){
        $xid_test    =  $filaTest["id_test"];
        $xuno_test    =  $filaTest["uno_test"];
        $xdos_test  =  $filaTest["dos_test"];
        $xtres_test =  $filaTest["tres_test"];

            ?>
                <tr class='gradeX'>
                    <td> <?php echo $xid_test?>  </td>
                    <td> <?php echo $xuno_test?> </td>
                    <td> <?php echo $xdos_test?> </td>
                    <td> <?php echo $xtres_test?></td>
                    <td class='actions'>
                        <a href='Comercial-testEdit.php' class='on-default edit-row' data-toggle='tooltip' data-placement='top' data-original-title='Editar'><i class='fa fa-pencil'></i></a>
                        <a href='Comercial-testGrabar.php' class='on-default remove-row' data-toggle='tooltip' data-placement='top' data-original-title='Eliminar'><i class='fa fa-trash-o'></i></a>
                    </td>
                </tr>
            <?php
    }
    desconectar($xc);
}
?>