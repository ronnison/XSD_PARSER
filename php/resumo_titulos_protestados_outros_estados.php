<?php
public class resumo_titulos_protestados_outros_estados {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $total;
	private $periodoTpDataDe;
	private $periodoTpDataAte;
	private $valorAcumulado;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $total, $periodoTpDataDe, $periodoTpDataAte, $valorAcumulado){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->total = $total;
		$this->periodoTpDataDe = $periodoTpDataDe;
		$this->periodoTpDataAte = $periodoTpDataAte;
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
	function set_periodoTpDataDe($periodoTpDataDe) {
		$this->periodoTpDataDe = $periodoTpDataDe;
	}
	function get_periodoTpDataDe() {
		return $this->periodoTpDataDe;
	}
	function set_periodoTpDataAte($periodoTpDataAte) {
		$this->periodoTpDataAte = $periodoTpDataAte;
	}
	function get_periodoTpDataAte() {
		return $this->periodoTpDataAte;
	}
	function set_valorAcumulado($valorAcumulado) {
		$this->valorAcumulado = $valorAcumulado;
	}
	function get_valorAcumulado() {
		return $this->valorAcumulado;
	}
}
?>