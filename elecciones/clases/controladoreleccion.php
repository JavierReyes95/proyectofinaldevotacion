<?php 
class controladorelecciones extends eleccion {
	public function guardarDatos($con,$objeleccion){
		$variableSql ="INSERT INTO elecciones";
      $variableSql.="(id_eleccion, precidencial,municipal,diputado,periodo)";
      $variableSql.="VALUES(";
      	$variableSql.="'".$objeleccion[0]."',";
      	$variableSql.="'".$objeleccion[1]."',";
      	$variableSql.="'".$objeleccion[2]."',";
      	$variableSql.="'".$objeleccion[3]."',";
	   $variableSql.="'".$objeleccion[4]."');";

 return consultaA($con, $variableSql);
 }

}