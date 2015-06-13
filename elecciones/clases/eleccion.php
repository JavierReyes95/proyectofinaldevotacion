<?php
class eleccion{
	private $id_eleccion;
	private $presidencial;
	private $municipal;
	private $diputado;
	private $periodo;

	public function getId_eleccion()
{
	return $this->id_eleccion;
}

 public function getPresidencial()
 {
 	return $this->presidencial;
 }
 public function getMunicipal()
 {
 	return $this->municipal;
 }
 public function getDiputado()
 {
 	return $this->diputado;
 }

 public function getPeriodo()
 {
 	return $this->periodo;
 }

 public function setId_eleccion($id_eleccion){
 $this->id_eleccion = $id_eleccion;}

 public function setPresidencial($presidencial){
 	$this->presidencial = $presidencial;
 }

 public function setMunicipal($municipal){
 	$this->municipal = $municipal;
 }

 public function setDiputado($diputado){
 	$this->diputado = $diputado;
 }

 public function setPeriodo($periodo){
 	$this->periodo = $periodo;
 }
}