<?php
public class resumo_de_acoes_civeis {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $quantidade;
	private $periodoInicial;
	private $periodoFinal;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $quantidade, $periodoInicial, $periodoFinal){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->quantidade = $quantidade;
		$this->periodoInicial = $periodoInicial;
		$this->periodoFinal = $periodoFinal;
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