<?php
public class informacoes_complementares_cheque {
	private $tamanhoRegistro;
	private $tipoDeRegistro;
	private $registro;
	private $tipoDocumento;
	private $numeroDocumento;
	private $texto;
	private $tipoDoRegistro;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoDeRegistro, $registro, $tipoDocumento, $numeroDocumento, $texto, $tipoDoRegistro){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoDeRegistro = $tipoDeRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->texto = $texto;
		$this->tipoDoRegistro = $tipoDoRegistro;
	}
	// Methods Getter and Setter
	function set_tamanhoRegistro($tamanhoRegistro) {
		$this->tamanhoRegistro = $tamanhoRegistro;
	}
	function get_tamanhoRegistro() {
		return $this->tamanhoRegistro;
	}
	function set_tipoDeRegistro($tipoDeRegistro) {
		$this->tipoDeRegistro = $tipoDeRegistro;
	}
	function get_tipoDeRegistro() {
		return $this->tipoDeRegistro;
	}
	function set_registro($registro) {
		$this->registro = $registro;
	}
	function get_registro() {
		return $this->registro;
	}
	function set_tipoDocumento($tipoDocumento) {
		$this->tipoDocumento = $tipoDocumento;
	}
	function get_tipoDocumento() {
		return $this->tipoDocumento;
	}
	function set_numeroDocumento($numeroDocumento) {
		$this->numeroDocumento = $numeroDocumento;
	}
	function get_numeroDocumento() {
		return $this->numeroDocumento;
	}
	function set_texto($texto) {
		$this->texto = $texto;
	}
	function get_texto() {
		return $this->texto;
	}
	function set_tipoDoRegistro($tipoDoRegistro) {
		$this->tipoDoRegistro = $tipoDoRegistro;
	}
	function get_tipoDoRegistro() {
		return $this->tipoDoRegistro;
	}
}
?>