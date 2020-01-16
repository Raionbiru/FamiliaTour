<?PHP require_once("../funciones.php");
    
    $xc = conectar();

    $xfec_ini=leerParam("fec_ini","");
    $xfec_fin=leerParam("fec_fin","");

    $sqlProgramacion = "SELECT * FROM programacion p
                        INNER JOIN bus b ON p.id_bus = b.id_bus
                        WHERE fec_prog >= '$xfec_ini' AND fec_prog <= '$xfec_fin'";
    $resProgramacion = mysqli_query($xc,$sqlProgramacion);
    
    while($fila=mysqli_fetch_array($resProgramacion)){
        $xfec_prog = $fila["fec_prog"];
        $xhora_prog = $fila["hora_prog"];
        $xplaca_bus = $fila["placa_bus"];

        echo " <tr>
                <td>$xfec_prog</td>
                <td>$xhora_prog</td>
                <td>$xplaca_bus</td>
               </tr>";
            
};
    
    desconectar($xc);
?>