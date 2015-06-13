<?php
 class ciudadanocontrolador extends ciudadano {

	public function guardarDatos($con,$objusuario){

		$variableSql = "INSERT INTO ciudadano";
		$variableSql .= "(id_dui, nombre, apellido, genero, fecha_nacimiento, id_departamento, id_municipio,";
        $variableSql .= "fecha_expedicion, depar_expedicion, mun_expedicion, fecha_expiracion, direccion,";
          $variableSql.= "depar_direccion, mun_direccion)";
		    $variableSql .= "VALUES (";
			$variableSql .="'".$objusuario[0]."',";
			$variableSql .="'".$objusuario[1]."',";
			$variableSql .="'".$objusuario[2]."',";
			$variableSql .="'".$objusuario[3]."',";
			$variableSql .="'".$objusuario[4]."',";
			$variableSql .="'".$objusuario[5]."',";
			$variableSql .="'".$objusuario[6]."',";
			$variableSql .="'".$objusuario[7]."',";
			$variableSql .="'".$objusuario[8]."',";
			$variableSql .="'".$objusuario[9]."',";
			$variableSql .="'".$objusuario[10]."',";
			$variableSql .="'".$objusuario[11]."',";
			$variableSql .="'".$objusuario[12]."',";
		    $variableSql .="'".$objusuario[13]."');";

            return consultaA($con, $variableSql);

	}

	public function modificarDatos($con, $objusuario){
		$variableSql = "UPDATE ciudadano SET ";
	   $variableSql .= "nombre = '".$objusuario[1]."'";
		$variableSql .= ",apellido = '".$objusuario[2]."'";
		$variableSql .= ",genero = '".$objusuario[3]."'";
		$variableSql .= ",fecha_nacimiento = '".$objusuario[4]."'";
		$variableSql .= ",id_departamento = '".$objusuario[5]."'";
		$variableSql .= ",id_municipio = '".$objusuario[6]."'";
		$variableSql .= ",fecha_expedicion = '".$objusuario[7]."'";
		$variableSql .= ",depar_expedicion = '".$objusuario[8]."'";
		$variableSql .= ",mun_expedicion = '".$objusuario[9]."'";
		$variableSql .= ",fecha_expiracion = '".$objusuario[10]."'";
		$variableSql .= ",direccion = '".$objusuario[11]."'";
		$variableSql .= ",depar_direccion = '".$objusuario[12]."'";
		$variableSql .= ",mun_direccion = '".$objusuario[13]."'";
        $variableSql .= " WHERE id_dui = ".$objusuario[0].";";
		return consultaA($con, $variableSql);
}

}
