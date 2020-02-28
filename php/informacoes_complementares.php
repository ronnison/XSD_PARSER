<?php
public class informacoes_complementares {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $texto;
	private $origem;
	private $ufOrigem;
	private $tipo;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $texto, $origem, $ufOrigem, $tipo){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->texto = $texto;
		$this->origem = $origem;
		$this->ufOrigem = $ufOrigem;
		$this->tipo = $tipo;
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
	function set_texto($texto) {
		$this->texto = $texto;
	}
	function get_texto() {
		return $this->texto;
	}
	function set_origem($origem) {
		$this->origem = $origem;
	}
	function get_origem() {
		return $this->origem;
	}
	function set_ufOrigem($ufOrigem) {
		$this->ufOrigem = $ufOrigem;
	}
	function get_ufOrigem() {
		return $this->ufOrigem;
	}
	function set_tipo($tipo) {
		$this->tipo = $tipo;
	}
	function get_tipo() {
		return $this->tipo;
	}
}
?>