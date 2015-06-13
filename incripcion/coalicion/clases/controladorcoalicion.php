<?php
class controladorcoalicion extends coalicion{
	public function guadarDatos($con,$objcoalicion){
	$variableSql = "INSERT INTO coalicion";
	 $variableSql.="(id_coalicion, dui, nombre, apellido, tipo_candidato,partido,partido_dos, ";
	 	$variableSql.=" bandera,departamento, municipio,partido_tres,partido_cuatro,coalicion)";
	 $variableSql.=   " VALUES (";
	 $variableSql.="'".$objcoalicion[0]."',";
	  $variableSql.="'".$objcoalicion[1]."',";
	   $variableSql.="'".$objcoalicion[2]."',";
	   $variableSql.="'".$objcoalicion[3]."',";
	   $variableSql.="'".$objcoalicion[4]."',";
	   $variableSql.="'".$objcoalicion[5]."',";
	   $variableSql.="'".$objcoalicion[6]."',";
	   $variableSql.="'".$objcoalicion[7]."',";
	   $variableSql.="'".$objcoalicion[8]."',";
	   $variableSql.="'".$objcoalicion[9]."',";
	   $variableSql.="'".$objcoalicion[10]."',";
	   $variableSql.="'".$objcoalicion[11]."',";
	   $variableSql.="'".$objcoalicion[12]."');";

    return consultaA($con, $variableSql);
	}
}