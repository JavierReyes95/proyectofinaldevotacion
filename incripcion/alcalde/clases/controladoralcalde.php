<?php

	class controladoralcalde extends alcalde{
public function guardarDatos($con,$objalcalde){
	$variableSql = "INSERT INTO alcalde";
	 $variableSql.="(id_alcalde,id_dui,nombre,apellido,partido,bandera,departamento,municipio)";
	 $variableSql.=   " VALUES(";
	 $variableSql.="'".$objalcalde[0]."',";
	  $variableSql.="'".$objalcalde[1]."',";
	   $variableSql.="'".$objalcalde[2]."',";
	   $variableSql.="'".$objalcalde[3]."',";
	   $variableSql.="'".$objalcalde[4]."',";
	   $variableSql.="'".$objalcalde[5]."',";
	    $variableSql.="'".$objalcalde[6]."',";
	   $variableSql.="'".$objalcalde[7]."');";

    return consultaA($con,$variableSql);
	}
}