<?php
class incripcioncontrolador extends candidato{
	public function guardarDatos($con,$objcandidato){
   
   $variableSql = "INSERT INTO  candidato";
   $variableSql .= "(id_candidato,nombre,apellido,tipo_candidadto,candidato,foto,";
   	$variableSql .= "id_partido,id_departamento,id_municipio,id_dui,cualicion)";
$variableSql .= "VALUES(";
	$variableSql .="'".$objcandidato[0]."',";
	$variableSql .="'".$objcandidato[1]."',";
	$variableSql .="'".$objcandidato[2]."',";
	$variableSql .="'".$objcandidato[3]."',";
	$variableSql .="'".$objcandidato[4]."',";
	$variableSql .="'".$objcandidato[5]."',";
	$variableSql .="'".$objcandidato[6]."',";
	$variableSql .="'".$objcandidato[7]."',";
	$variableSql .="'".$objcandidato[8]."',";
	$variableSql .="'".$objcandidato[9]."',";
	$variableSql .="'".$objcandidato[10]."');";
var_dump($objcandidato);
	      return consultaA($con, $variableSql);

	}

	public function modificarDatos($con, $objcandidato){
		$variableSql = "UPDATE candidato SET ";
		$variableSql .= "nombre'".$objcandidato[1]."'";
		$variableSql .= ",apellido'".$objcandidato[2]."'";
		$variableSql.= ", tipo_candidadto'".$objcandidato[3]."'";
		$variableSql .= ",candidato'".$objcandidato[4]."'";
		$variableSql .= ",foto'".$objcandidato[5]."'";
		$variableSql .= ",id_partido'".$objcandidato[6]."'";
		$variableSql .= ",id_departamento'".$objcandidato[7]."'";
		$variableSql .= ",id_municipio'".$objcandidato[8]."'";
		$variableSql .= ",id_dui'".$objcandidato[9]."'";
		$variableSql .= ", cualicion'".$objcandidato[10]."'";
		 $variableSql .= " WHERE id_candidato= ".$objcandidato[0].";";
		return consultaA($con, $variableSql);
	}
}