<?php
class controladorcualicion extends cualicion{
	public function guadarDatos($con,$objcualicion){
	$variableSql = "INSERT INTO cualicion";
	 $variableSql.="(id_cualicion, dui, nombre, apellido, tipo_candidato,partido,partido_dos, ";
	 	$variableSql.=" bandera,departamento, municipio,partido_tres,partido_cuatro,coalicion)";
	 $variableSql.=   " VALUES (";
	 $variableSql.="'".$objcualicion[0]."',";
	  $variableSql.="'".$objcualicion[1]."',";
	   $variableSql.="'".$objcualicion[2]."',";
	   $variableSql.="'".$objcualicion[3]."',";
	   $variableSql.="'".$objcualicion[4]."',";
	   $variableSql.="'".$objcualicion[5]."',";
	   $variableSql.="'".$objcualicion[6]."',";
	   $variableSql.="'".$objcualicion[7]."',";
	   $variableSql.="'".$objcualicion[8]."',";
	   $variableSql.="'".$objcualicion[9]."',";
	   $variableSql.="'".$objcualicion[10]."',";
	   $variableSql.="'".$objcualicion[11]."',";
	   $variableSql.="'".$objcualicion[12]."');";

    return consultaA($con, $variableSql);
	}
}