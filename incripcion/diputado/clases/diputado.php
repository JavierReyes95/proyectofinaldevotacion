<?php

class diputado{
	private $id_diputado;
	private $id_dui;
	private $nombre;
	private $apellido;
	private $partido;
	private $bandera;
	private $departamento;

	public  function getId_diputado(){
		return $this->id_diputado;
	}
	public function getId_dui(){
		return $this->id_dui;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getApellido(){
		return $this->apellido;
	}
	public function getPartido(){
		return $this->partido;
	}
	public function getBandera(){
		return $this->bandera;
	}
	public function getDepartamento(){
		return $this->departamento;
	}
	public function setId_diputado($id_diputado){
		$this->id_diputado = $id_diputado;
	}
	public function setId_dui($id_dui){
		$this->id_dui = $id_dui;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}
	public function setPartido($partido){
		$this->partido = $partido;
	}

	public  function setBandera($bandera){
		$this->bandera= $bandera;
	}

	public function setDepartamento($departamento){
		$this->departamento = $departamento;
	}
}