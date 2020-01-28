<?php
  require_once("funciones.php");
  $xlog_per = leerParam('log_per','' );
  $xpass_per  = leerParam('pass_per','' );

  $xc = conectar();

  $sqlPersona = "SELECT count(*)  FROM persona WHERE log_per='$xlog_per' AND pass_per='$xpass_per'";
    $resPersona = mysqli_query($xc, $sqlPersona );    
    $filaPersona = mysqli_fetch_array($resPersona);
    $xcanPersona = $filaPersona[0];


 $sqlCliente = "SELECT count(*)  FROM cliente WHERE email_cliente='$xlog_per' AND pas_cliente='$xpass_per'";
    $resCliente = mysqli_query($xc, $sqlCliente );    
    $filaCliente = mysqli_fetch_array($resCliente);
    $xcanCliente = $filaCliente[0];

if ( $xcanPersona > 0 ) {

    $sqlPersonaConsulta = "SELECT * FROM persona WHERE log_per='$xlog_per' AND pass_per='$xpass_per'";
    $resPersonaConsulta = mysqli_query($xc, $sqlPersonaConsulta);
    $filaPersonaConsulta = mysqli_fetch_array($resPersonaConsulta);

    $xid_area = $filaPersonaConsulta["id_area"];
    $xestado_per = $filaPersonaConsulta["estado_per"];

    session_start();
    $_SESSION["nom_per"]=$filaPersonaConsulta["nom_per"];
    $_SESSION["ape_per"]=$filaPersonaConsulta["ape_per"];

    if($xestado_per > 0){
        switch ($xid_area) {
            case '1':
                header("Location: Comercial.php");
                session_start();
                $_SESSION["nomComercial"]=$filaPersonaConsulta["nom_per"];
                $_SESSION["apeComercial"]=$filaPersonaConsulta["ape_per"];
                $_SESSION["rol"]=$xid_area;
                desconectar($xc);
                break;
            
            case '2':
                header("Location: Operaciones.php");
                session_start();
                $_SESSION["nomOperaciones"]=$filaPersonaConsulta["nom_per"];
                $_SESSION["apeOperaciones"]=$filaPersonaConsulta["ape_per"];
                $_SESSION["rol"]=$xid_area;
                desconectar($xc);
                break;
            
            case '3':
                header("Location: Admi.php");
                session_start();
                $_SESSION["nomAdministrador"]=$filaPersonaConsulta["nom_per"];
                $_SESSION["apeAdministrador"]=$filaPersonaConsulta["ape_per"];
                $_SESSION["rol"]=$xid_area;
                desconectar($xc);
                break;
            
            default:
                desconectar($xc);
                header("Location: register.php");
                break;
        }
    }else{
        desconectar($xc);
    header("Location: index.php");
    }

}else if( $xcanCliente > 0){

    $sqlClienteConsulta = "SELECT * FROM cliente WHERE email_cliente='$xlog_per' AND pas_cliente='$xpass_per'";
    $resClienteConsulta = mysqli_query($xc, $sqlClienteConsulta);
    $filaClienteConsulta = mysqli_fetch_array($resClienteConsulta);

    $xestadoCliente = $filaClienteConsulta["estado_cliente"];

    if($xestadoCliente == 0){
        header("Location: register.php");
        desconectar($xc);	
    }else{
        header("Location: Agencia.php");
        session_start();
                $_SESSION["nomCliente"]=$filaClienteConsulta["nom_cliente"];
                $_SESSION["apeCliente"]=$filaClienteConsulta["ape_cliente"];
                $_SESSION["emailCliente"]=$filaClienteConsulta["email_cliente"];
                $_SESSION["emprCliente"]=$filaClienteConsulta["empr_cliente"];
                $_SESSION["celCliente"]=$filaClienteConsulta["cel_cliente"];
                $_SESSION["estadoCliente"]=$xestadoCliente;
                $_SESSION["idCliente"]=$filaClienteConsulta["id_cliente"];
        desconectar($xc);
    }
    
}else {
    desconectar($xc);
    header("Location: index.php");
}

