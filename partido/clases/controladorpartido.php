<?php
class controladorpartido extends partido{
	public function guadarDatos($con, $objpartido){
		$variableSql = "INSERT INTO partido";
		$variableSql .= "(id_partido, id_dui,responsable,bandera,partido)";
		$variableSql .=   "VALUES (";
		$variableSql .="'".$objpartido[0]."',";
		$variableSql .="'".$objpartido[1]."',";
		$variableSql .="'".$objpartido[2]."',";
		$variableSql .="'".$objpartido[3]."',";
		$variableSql .="'".$objpartido[4]."');";

       return consultaA($con, $variableSql);
	}

	public function modificarDatos($con, $objpartido){
	$variableSql = "UPDATE  partido SET  ";
	$variableSql .= "id_dui = '".$objpartido[1]."'";
	$variableSql .= ", responsable= '".$objpartido[2]."'";
	$variableSql .= ", bandera= '".$objpartido[3]."'";
	$variableSql .= ", partido= '".$objpartido[4]."'";
	  $variableSql .= " WHERE id_partido = ".$objpartido[0].";"; 
	  var_dump($objpartido);
	  return consultaA($con, $variableSql);  
	  }             
}