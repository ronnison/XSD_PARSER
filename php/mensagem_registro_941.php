<?php
public class mensagem_registro_941 {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $registroReferencia;
	private $moduloScore;
	private $texto;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $registroReferencia, $moduloScore, $texto){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->registroReferencia = $registroReferencia;
		$this->moduloScore = $moduloScore;
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
	function set_moduloScore($moduloScore) {
		$this->moduloScore = $moduloScore;
	}
	function get_moduloScore() {
		return $this->moduloScore;
	}
	function set_texto($texto) {
		$this->texto = $texto;
	}
	function get_texto() {
		return $this->texto;
	}
}
?>