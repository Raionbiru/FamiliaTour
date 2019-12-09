<?php 

require_once("Models/Persona.php");
require_once("funciones.php");
class PersonaDatos{
	function getPersonaById($id){
		$persona = new Persona();
		$xc = conectar();
		$sql = "SELECT * FROM persona WHERE id_per='$id'";
		$res = mysqli_query($xc,$sql);
		desconectar($xc);
		$fila = mysqli_fetch_array($res);
		$persona->id_per = $fila['id_per'];
		$persona->nom_per = $fila['nom_per'];
		$persona->ape_per = $fila['ape_per'];
		$persona->direc_per = $fila['direc_per'];
		$persona->email_per_per = $fila['email_per_per'];
		$persona->email_corp_per = $fila['email_corp_per'];
		$persona->cel_per_per = $fila['cel_per_per'];
		$persona->cel_corp_per = $fila['cel_corp_per'];
		$persona->dni_per = $fila['dni_per'];
		$persona->cargo_per = $fila['cargo_per'];
		$persona->log_per = $fila['log_per'];
        $persona->pass_per = $fila['pass_per'];
        $persona->estado_per = $fila['estado_per'];
        $persona->notificacion_per = $fila['notificacion_per'];
        $persona->id_area = $fila['id_area'];        
		return $persona;
	}
	
}
 ?>
