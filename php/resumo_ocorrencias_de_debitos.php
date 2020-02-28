<?php
public class resumo_ocorrencias_de_debitos {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $totalDevedor;
	private $totalAvalista;
	private $valorAcomulado;
	private $dataPrimeiroDebito;
	private $valorPrimeiroDebito;
	private $dataMaiorDebito;
	private $valorMaiorDebito;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $totalDevedor, $totalAvalista, $valorAcomulado, $dataPrimeiroDebito, $valorPrimeiroDebito, $dataMaiorDebito, $valorMaiorDebito){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->totalDevedor = $totalDevedor;
		$this->totalAvalista = $totalAvalista;
		$this->valorAcomulado = $valorAcomulado;
		$this->dataPrimeiroDebito = $dataPrimeiroDebito;
		$this->valorPrimeiroDebito = $valorPrimeiroDebito;
		$this->dataMaiorDebito = $dataMaiorDebito;
		$this->valorMaiorDebito = $valorMaiorDebito;
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
	function set_totalDevedor($totalDevedor) {
		$this->totalDevedor = $totalDevedor;
	}
	function get_totalDevedor() {
		return $this->totalDevedor;
	}
	function set_totalAvalista($totalAvalista) {
		$this->totalAvalista = $totalAvalista;
	}
	function get_totalAvalista() {
		return $this->totalAvalista;
	}
	function set_valorAcomulado($valorAcomulado) {
		$this->valorAcomulado = $valorAcomulado;
	}
	function get_valorAcomulado() {
		return $this->valorAcomulado;
	}
	function set_dataPrimeiroDebito($dataPrimeiroDebito) {
		$this->dataPrimeiroDebito = $dataPrimeiroDebito;
	}
	function get_dataPrimeiroDebito() {
		return $this->dataPrimeiroDebito;
	}
	function set_valorPrimeiroDebito($valorPrimeiroDebito) {
		$this->valorPrimeiroDebito = $valorPrimeiroDebito;
	}
	function get_valorPrimeiroDebito() {
		return $this->valorPrimeiroDebito;
	}
	function set_dataMaiorDebito($dataMaiorDebito) {
		$this->dataMaiorDebito = $dataMaiorDebito;
	}
	function get_dataMaiorDebito() {
		return $this->dataMaiorDebito;
	}
	function set_valorMaiorDebito($valorMaiorDebito) {
		$this->valorMaiorDebito = $valorMaiorDebito;
	}
	function get_valorMaiorDebito() {
		return $this->valorMaiorDebito;
	}
}
?>