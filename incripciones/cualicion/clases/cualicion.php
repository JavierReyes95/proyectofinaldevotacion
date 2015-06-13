<?php
class cualicion{
	private $id_cualicion;
	private $dui;
	private $nombre;
	private $apellido;
	private $tipo_cantidato;
	private $partido;
	private $partido_dos;
	private $bandera;
	private $departamento;
	private $municipio;
	private $partido_tres;
	private $partido_cuatro;
	private $coalicion;

	public function getId_cualicion(){
		return $this->id_cualicion;
	}
   public function getDui(){
		return $this->dui;
	}
	 public function getNombre(){
		return $this->nombre;
	}
	public function getApellido(){
		return $this->apellido;
	}
	public  function getTipo_candidato(){
		return $this->tipo_cantidato;
	}

	public  function getPartido(){
		return $this->partido;
	}
	public function getPartido_dos(){
		return $this->partido_dos;
	}
	public function getBandera(){
		return $this->bandera;
	}
	public function getDepartamento(){
		return $this->departamento;
	}
	public function getMunicipio(){
		return $this->municipio;
	}
  public  function getPartido_tres(){
  	return $this->partido_tres;
  }
  public  function getPartido_cuatro(){
   return $this->partido_cuatro;
  }

  public  function getCoalicion(){
  	return $this->coalicion;
  }
	public function setId_cualicon($id_cualicion){
		$this->id_cualicion = $id_cualicion;
	}

	public function setDui($dui){
		$this->dui = $dui;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function setTipo_candidato($tipo_cantidato){
		$this->tipo_cantidato = $tipo_cantidato;
	}
	public function setPartido($partido){

		$this->partido = $partido;
	}
	public function setPartido_dos($partido_dos){
		$this->partido_dos = $partido_dos;
	}

	public function setBandera($bandera){
		$this->bandera = $bandera;
	}
	public function setDepartamento($departamento){
		$this->departamento = $departamento;
	}
	public  function setMunicipio($municipio){
		$this->municipio = $municipio;
	}

	public function setPartido_tres($partido_tres){
		$this->partido_tres = $partido_tres;
	}

	public  function setPartido_cuatro($partido_cuatro){
		$this->partido_cuatro = $partido_cuatro;
	}

	public function setCoalicion($coalicion){
		$this->coalicion = $coalicion;
	}
}