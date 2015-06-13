<?php
error_reporting(0);
session_start();
 $nombre = $_REQUEST['usuario'];
 $pass =  $_REQUEST['pass'];

 $conexion = mysql_connect("localhost", "root") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("tribunal", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM usuario where login = '".$nombre."' and  passnormal = '".$pass. "'" ,$conexion);


 $admin = mysql_query( "SELECT * FROM usuario where login = '".$nombre."' and  passadmin = '".$pass. "'" ,$conexion);

 if($row = mysql_fetch_array($estandar)){
$_SESSION['usuario'] = $row;
 	header("location: tribunal.php");
 }else if ( $row = mysql_fetch_array($admin)){
 	$_SESSION['usuario'] = $row;
	header("location: /votacion2/tribunal.php");
} else {
	echo "ERROR CONTRASEÑA O NOMBRE INCORRECTO";
}
