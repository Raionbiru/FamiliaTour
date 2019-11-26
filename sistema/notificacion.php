<?php require_once("funciones.php");

$xc = conectar();

$sql = "UPDATE cliente SET notificacion_cliente = 1 WHERE notificacion_cliente = 0";
$res = mysqli_query($xc,$sql);
desconectar($xc);

header("Refresh:0");
?>