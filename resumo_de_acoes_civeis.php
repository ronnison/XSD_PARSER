<?php
public class resumo_de_acoes_civeis {
	public $tamanhoRegistro;
	public $tipoRegistro;
	public $registro;
	public $quantidade;
	public $periodoInicial;
	public $periodoFinal;

	// Methods Construtor and Destrutor

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
	function set_quantidade($quantidade) {
		$this->quantidade = $quantidade;
	}
	function get_quantidade() {
		return $this->quantidade;
	}
	function set_periodoInicial($periodoInicial) {
		$this->periodoInicial = $periodoInicial;
	}
	function get_periodoInicial() {
		return $this->periodoInicial;
	}
	function set_periodoFinal($periodoFinal) {
		$this->periodoFinal = $periodoFinal;
	}
	function get_periodoFinal() {
		return $this->periodoFinal;
	}
}
?>