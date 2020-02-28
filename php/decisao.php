<?php
public class decisao {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $documento;
	private $score;
	private $aprova;
	private $texto;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $documento, $score, $aprova, $texto){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->documento = $documento;
		$this->score = $score;
		$this->aprova = $aprova;
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
	function set_tipoDocumento($tipoDocumento) {
		$this->tipoDocumento = $tipoDocumento;
	}
	function get_tipoDocumento() {
		return $this->tipoDocumento;
	}
	function set_documento($documento) {
		$this->documento = $documento;
	}
	function get_documento() {
		return $this->documento;
	}
	function set_score($score) {
		$this->score = $score;
	}
	function get_score() {
		return $this->score;
	}
	function set_aprova($aprova) {
		$this->aprova = $aprova;
	}
	function get_aprova() {
		return $this->aprova;
	}
	function set_texto($texto) {
		$this->texto = $texto;
	}
	function get_texto() {
		return $this->texto;
	}
}
?>