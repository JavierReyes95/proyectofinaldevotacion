<?php

class presidente{
private $id_presidente;
private $id_dui;
private $nombre;
private $apellido;
private $partido;
private $bandera;
private $candidato;

public function getId_presidente(){
 return $this->id_presidente;
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
public function getCandidato(){
	return $this->candidato;
}

public function setId_presidente($id_presidente){
	$this->id_presidente = $id_presidente;
}

public function setId_dui($id_dui){
	$this->id_dui = $id_dui;
}
public function setNombre($nombre){
	$this->nombre = $nombre;
}

public  function setApellido($apellido){
	$this->apellido = $apellido;
}

public function setPartido($partido){
	$this->partido = $partido;
}
public function setBandera($bandera){
	$this->bandera  = $bandera;
}

public function setCandidato($candidato){
	$this->candidato = $candidato;
}
}