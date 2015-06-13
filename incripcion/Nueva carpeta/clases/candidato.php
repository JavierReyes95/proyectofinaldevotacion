<?php
class candidato{
	private $id_candidato;
	private $dui_candidato;
	private $nombre_candidato;
	private $apellido_candidato;
	private $tipo_candidato;
	private $candidato;
	private $foto_candidato;
	private $partido_candidato;
	private $departamento_candidato;
	private $municipio_candidato;
	private $cualicion;
	private $pais;
	private $depar_diputado;


	public function getId_candidato()
	{     return $this->id_candidato;

	}

	public function getDui_candidato(){
		return $this->dui_candidato;
	}

	public function getNombre_candidato(){
		return $this->nombre_candidato;
	}

	public function getApellido_candidato()
	{
		return $this->apellido_candidato;
	}

	public function getTipo_candidato(){
		return $this->tipo_candidato;
	}

	public function getCandidato(){
		return $this->candidato;
	}

	public function getFoto_candidato(){
		return $this->foto_candidato;
	}

	public function getPartido_candidato()
	{
		return $this->partido_candidato;
	}

	public function getDepartamento_candidato(){
		return $this->departamento_candidato;
	}

	public function getMunicipio_candidato(){
		return $this->municipio_candidato;
	}

	public function getCualicion(){
		return $this->cualicion;
	}

	public function getPais(){
		return $this->pais;
	}

	public function getDepar_diputado()
	{
		return $this->depar_diputado;
	}

	public function setId_candidato($id_candidato) {
		$this->id_candidato = $id_candidato;
	}
	public function setDui_candidato($dui_candidato) {
		$this->dui_candidato = $dui_candidato;
	}

	public function setNombre_candidato($nombre_candidato) {
		$this->nombre_candidato = $nombre_candidato;
	}
	public function setApellido_candidato($apellido_candidato) {
		$this->apellido_candidato = $apellido_candidato;
	}

	public function setTipo_cantidato($tipo_candidato) {
		$this->tipo_candidato = $tipo_candidato;
	}

	public function setCandidato($candidato) {
		$this->candidato = $candidato;
	}

	public function setFoto_candidato($foto_candidato) {
		$this->foto_candidato = $foto_candidato;
	}

	public function setPartido_candidato($partido_candidato) {
		$this->partido_candidato = $partido_candidato;
	}

	

	public function setDepartamento_candidato($departamento_candidato) {
		$this->departamento_candidato = $departamento_candidato;
	}

	public function setMunicipio_candidato($municipio_candidato) {
		$this->municipio_candidato = $municipio_candidato;
	}

	

	public function setCualicion($cualicion) {
		$this->cualicion = $cualicion;
	}

	public function setPais($pais) {
		$this->pais = $pais;
	}

	public function setDepar_diputado($depar_diputado)
	{
		$this->depar_diputado = $depar_diputado;
	}
	}
