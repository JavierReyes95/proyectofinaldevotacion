<?php

class Partido
{
 private $id_partido;
 private $id_dui;
 private $responsable;
 private $bandera;
 private $partido;

public function getId_partido(){
          return $this->id_partido;
	}

	public function getId_dui(){
          return $this->id_dui;
	}
public function getResponsable(){
          return $this->responsable;
	}
public function getBandera(){
          return $this->bandera;
	}

public function getPartido(){
          return $this->partido;
	}

public function setId_partido($id_partido) {
		$this->id_partido = $id_partido;
	}

	public function setId_dui($id_dui) {
		$this->id_dui = $id_dui;
	}

	public function setResponsable($responsable) {
		$this->responsable = $responsable;
	}

	public function setBandera($bandera) {
		$this->bandera = $bandera;
	}

	public function setPartido($partido) {
		$this->partido = $partido;
	}
}
