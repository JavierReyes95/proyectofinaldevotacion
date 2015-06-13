<?php
class ciudadano {
	
	private $id_dui;
	private $nombre;
	private $apellido;
	private $genero;
	private $fecha_nacimiento;
	private $id_departamento;
	private $id_municipio;
	private $fecha_expedicion;
	private $depar_expedicion;
	private $mun_expedicion;
	private $fecha_expiracion;
	private $direccion;
	private $depar_direccion;
	private $mun_direccion;



	public function getId_dui(){
          return $this->id_dui;
	}


	
    public function getNombre(){
		return $this->nombre;
	}
	public function getApellido(){
		return $this->apellido;
	}
	public function getGenero(){
		return $this->genero;
	}
	public function getFecha_nacimiento(){
		return $this->fecha_nacimiento;
	}
	public function getId_departamento(){
		return $this->id_departamento;
	}
	public function getId_municipio(){
		return $this->id_municipio;
	}
	public function getFecha_expedicion(){
		return $this->fecha_expedicion;
	}
	public function getDepar_expedicion(){
		return $this->depar_expedicion;
	}
	public function getMun_expedicion(){
		return $this->mun_expedicion;
	}

	public function getFecha_expiracion(){
		return $this->fecha_expiracion;
	}

	public function getDireccion(){
		return $this->direccion;
	}
	public function getDepar_direccion(){
		return $this->depar_direccion;
	}
	public function getMun_direccion(){
		return $this->mun_direccion;
	}



	public function setId_dui($id_dui) {
		$this->id_dui = $id_dui;
	}



    public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	public function setApellido($apellido) {
		$this->apellido = $apellido;
	}
	public function setGenero($genero) {
		$this->genero = $genero;
	}

	public function setFecha_nacimiento($fecha_nacimiento) {
		$this->fecha_nacimiento = $fecha_nacimiento;
	}

	public function setId_departamento($id_departamento) {
		$this->id_departamento = $id_departamento;
	}

	public function setId_municipio($id_municipio) {
		$this->id_municipio = $id_municipio;
	}

	public function setFecha_expedicion($fecha_expedicion) {
		$this->fecha_expedicion = $fecha_expedicion;
	}

	public function setDepar_expedicion($depar_expedicion) {
		$this->depar_expedicion = $depar_expedicion;
	}

	public function setMun_expedicion($mun_expedicion){
		$this->mun_expedicion = $mun_expedicion;
	}

	public function setFecha_expiracion($fecha_expiracion) {
		$this->fecha_expiracion = $fecha_expiracion;
	}

	public function setDireccion($direccion) {
		$this->direccion = $direccion;
	}

	public function setDepar_direccion($depar_direccion) {
	$this->depar_direccion = $depar_direccion;
}

public function setMun_direccion($mun_direccion) {
	$this->mun_direccion = $mun_direccion;
}

}
