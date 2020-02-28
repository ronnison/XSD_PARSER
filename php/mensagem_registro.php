<?php
public class mensagem_registro {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $registroReferencia;
	private $texto;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $registroReferencia, $texto){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->registroReferencia = $registroReferencia;
		$this->texto = $texto;
	}
	// Methods Getter and Setter
	function set_tamanhoRegistro($tamanhoRegistro) {
		$this->tamanhoRegistro = $tamanhoRegistro;
	}
	function get_tamanhoRegistro() {
		return $this->tamanhoRegistro;
	}
	function set_tipoRegistro($tipoRegistro) {
		$this->tipoRegistro = $tipoRegistro;
	}
	function get_tipoRegistro() {
		return $this->tipoRegistro;
	}
	function set_registro($registro) {
		$this->registro = $registro;
	}
	function get_registro() {
		return $this->registro;
	}
	function set_registroReferencia($registroReferencia) {
		$this->registroReferencia = $registroReferencia;
	}
	function get_registroReferencia() {
		return $this->registroReferencia;
	}
	function set_texto($texto) {
		$this->texto = $texto;
	}
	function get_texto() {
		return $this->texto;
	}
}
?>