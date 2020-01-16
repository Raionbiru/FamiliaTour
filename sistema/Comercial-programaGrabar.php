<?php require_once("funciones.php");

$xaccion=leerParam("accion","");

if ($xaccion=="crear") {

    $xfec_prog=leerParam("fec_prog","");
    $xhora_prog=leerParam("hora_prog","");
    $xid_tour=leerParam("id_tour","");
    $xid_bus=leerParam("id_bus","");

    $xc = conectar();
    $sql = "INSERT INTO programacion (fec_prog, hora_prog, id_tour, id_bus ) VALUES ('$xfec_prog','$xhora_prog','$xid_tour', '$xid_bus')";
    mysqli_query($xc,$sql);

    desconectar($xc);
    header("Location: Comercial-programa.php");

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

/*
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
}*/
?>