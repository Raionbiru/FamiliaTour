<?php
  require_once("funciones.php");
  $xlog_per = leerParam('log_per','' );
  $xpass_per  = leerParam('pass_per','' );
  $xc = conectar();
  $sql = "SELECT count(*)  FROM persona p, cliente c WHERE (p.log_per='$xlog_per' AND p.pass_per='$xpass_per') OR (c.email_cliente='$xlog_per' AND c.pas_cliente='$xpass_per')";


  $sql = "SELECT count(*)  FROM persona p WHERE p.log_per='$xlog_per' AND p.pass_per='$xpass_per'";
  $res = mysqli_query($xc, $sql );    
  $fila = mysqli_fetch_array($res);
  $xcan = $fila[0];

	
 	$sql2 = "SELECT t.nom_tipo_per, p.nom_per, p.ape_per, p.estado_per, a.nom_area
	 		FROM persona p
			INNER JOIN tipo_persona t ON p.id_tipo_per = t.id_tipo_per 
			INNER JOIN area a ON p.id_area = a.id_area
			WHERE p.log_per = '$xlog_per'";

	$res2 = mysqli_query($xc, $sql2 );    
	$fila2 = mysqli_fetch_array($res2);

	$xnom_tipo_per = $fila2[0];
	$xestado_per = $fila2[3];
	$xnom_area = $fila2[4];


	/*	$sql3 = "SELECT c.nom_cliente, c.ape_cliente, c.id_cliente, c.estado_cliente 
		FROM cliente c
		Where c.email_cliente='$xlog_per' AND c.pas_cliente='$xpass_per'";
	
		$res3 = mysqli_query($xc, $sql3);
		$fila3 = mysqli_fetch_array($res3);
	
			$xnom_cliente = $fila3[0];
			$xape_cliente = $fila3[1];
			$xid_cliente = $fila3[2];
			$xestado_cliente = $fila3[3];

			if ( $xcan > 0 ) {
				session_start();
				$_SESSION["nom_cliente"]=$fila3[0];
				$_SESSION["ape_cliente"]=$fila3[1];
		
				if($xestado_cliente == "0"){
					header("Location: Agencia.php");
				}else{
					header("Location: register.php");
				}
				desconectar($xc);
				echo "Entro y salio";
			}
	
*/
	if($xestado_per == 0){
		$xcan = 0;
		desconectar($xc);
	}

	if ( $xcan > 0 ) {
		session_start();
		$_SESSION["nom_per"]=$fila2[1];
		$_SESSION["ape_per"]=$fila2[2];

		if($xnom_tipo_per == "Administrador"){
			if($xnom_area == "Administracion"){
				header("Location: Admi.php");
			}else if($xnom_area == "Operaciones"){
				header("Location: Operaciones.php");
			}else if($xnom_area == "Comercial"){
				header("Location: Comercial.php");
			}
		}else if ($xnom_tipo_per == "Usuario"){
			header("Location: Agencia-header.php");
		}


		desconectar($xc);
		echo "Entro y salio";
  	}

  
  else
  {
  	desconectar($xc);
    header("Location: register.php");
  }
?>
