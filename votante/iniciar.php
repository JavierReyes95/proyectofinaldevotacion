<?php
error_reporting(0);
session_start();
 $nombre = $_REQUEST['dui'];

 $conexion = mysql_connect("localhost", "root") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("tribunal", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM ciudadano where id_dui = '".$nombre."' " ,$conexion);
if($row = mysql_fetch_array($estandar)){
       $_SESSION['dui'] = $row;
 	header("location: action=presidente.php   ");
 }else if ( $row = mysql_fetch_array($admin)){
	
} else {
	echo "ERROR CONTRASEÑA O NOMBRE INCORRECTO";
}
