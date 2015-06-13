<?php
class controlarpresidente extends presidente{
public function guardarDatos($con,$objpresidente){
		$variableSql = "INSERT INTO presidente";
	 $variableSql.="(id_presidente,id_dui,nombre,apellido,partido,bandera,candidato)";
	  $variableSql.=   " VALUES (";
	 $variableSql.="'".$objpresidente[0]."',";
	  $variableSql.="'".$objpresidente[1]."',";
	   $variableSql.="'".$objpresidente[2]."',";
	   $variableSql.="'".$objpresidente[3]."',";
	   $variableSql.="'".$objpresidente[4]."',";
	   $variableSql.="'".$objpresidente[5]."',";
	   $variableSql.="'".$objpresidente[6]."');";
    return consultaA($con, $variableSql);
	}
   }
