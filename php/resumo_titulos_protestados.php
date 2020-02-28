<?php
public class resumo_titulos_protestados {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $total;
	private $uf;
	private $periodoInicial;
	private $periodoFinal;
	private $moeda;
	private $valorAcumulado;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $total, $uf, $periodoInicial, $periodoFinal, $moeda, $valorAcumulado){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->total = $total;
		$this->uf = $uf;
		$this->periodoInicial = $periodoInicial;
		$this->periodoFinal = $periodoFinal;
		$this->moeda = $moeda;
		$this->valorAcumulado = $valorAcumulado;
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
	function set_total($total) {
		$this->total = $total;
	}
	function get_total() {
		return $this->total;
	}
	function set_uf($uf) {
		$this->uf = $uf;
	}
	function get_uf() {
		return $this->uf;
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
	function set_moeda($moeda) {
		$this->moeda = $moeda;
	}
	function get_moeda() {
		return $this->moeda;
	}
	function set_valorAcumulado($valorAcumulado) {
		$this->valorAcumulado = $valorAcumulado;
	}
	function get_valorAcumulado() {
		return $this->valorAcumulado;
	}
}
?>