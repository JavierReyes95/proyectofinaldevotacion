<?php
class controladordiputado extends diputado{
	public function guadarDatos($con,$objdiputados){
	$variableSql = "INSERT INTO diputado";
	 $variableSql.="(id_diputado, id_dui, nombre, apellido, partido, bandera, departamento)";
	 $variableSql.=   " VALUES (";
	 $variableSql.="'".$objdiputados[0]."',";
	  $variableSql.="'".$objdiputados[1]."',";
	   $variableSql.="'".$objdiputados[2]."',";
	   $variableSql.="'".$objdiputados[3]."',";
	   $variableSql.="'".$objdiputados[4]."',";
	   $variableSql.="'".$objdiputados[5]."',";
	   $variableSql.="'".$objdiputados[6]."');";

    return consultaA($con, $variableSql);
	}
}