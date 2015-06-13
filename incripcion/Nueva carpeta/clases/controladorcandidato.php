<?php
class controladorcandidato extends candidato{
	public function guardarDatos($con,$objcandidato){
		$variableSql = "INSERT INTO candidato";
		 $variableSql .= "(Id_candidato, dui_candidato, nombre_candidato, apellido_candidato, tipo_candidato, candidato,";
	    $variableSql .=  " foto_candidado, partido_candidato, departamento_candidato, municipio_candidato, cualicion, pais,depar_diputado)";
        $variableSql.=   " VALUES (";
		$variableSql.="'".$objcandidato[0]."',";
		$variableSql.="'".$objcandidato[1]."',";
		$variableSql.="'".$objcandidato[2]."',";
		$variableSql.="'".$objcandidato[3]."',";
		$variableSql.="'".$objcandidato[4]."',";
		$variableSql.="'".$objcandidato[5]."',";
		$variableSql.="'".$objcandidato[6]."',";
		$variableSql.="'".$objcandidato[7]."',";
		$variableSql.="'".$objcandidato[8]."',";
		$variableSql.="'".$objcandidato[9]."',";
		$variableSql.="'".$objcandidato[10]."',";
		$variableSql.="'".$objcandidato[11]."',";
        $variableSql.="'".$objcandidato[12]."');";
var_dump($objcandidato);
    return consultaA($con, $variableSql);
	}
   }
