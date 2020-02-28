<?php
public class resumo_ocorrencias_titulos_protestados_estado_sp {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $total;
	private $valorAcumulado;
	private $dataPrimeiroTituloProtestado;
	private $valorPrimeiroTituloProtestado;
	private $dataMaiorTituloProtestado;
	private $valorMaiorTituloProtestado;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $total, $valorAcumulado, $dataPrimeiroTituloProtestado, $valorPrimeiroTituloProtestado, $dataMaiorTituloProtestado, $valorMaiorTituloProtestado){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->total = $total;
		$this->valorAcumulado = $valorAcumulado;
		$this->dataPrimeiroTituloProtestado = $dataPrimeiroTituloProtestado;
		$this->valorPrimeiroTituloProtestado = $valorPrimeiroTituloProtestado;
		$this->dataMaiorTituloProtestado = $dataMaiorTituloProtestado;
		$this->valorMaiorTituloProtestado = $valorMaiorTituloProtestado;
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
	function set_valorAcumulado($valorAcumulado) {
		$this->valorAcumulado = $valorAcumulado;
	}
	function get_valorAcumulado() {
		return $this->valorAcumulado;
	}
	function set_dataPrimeiroTituloProtestado($dataPrimeiroTituloProtestado) {
		$this->dataPrimeiroTituloProtestado = $dataPrimeiroTituloProtestado;
	}
	function get_dataPrimeiroTituloProtestado() {
		return $this->dataPrimeiroTituloProtestado;
	}
	function set_valorPrimeiroTituloProtestado($valorPrimeiroTituloProtestado) {
		$this->valorPrimeiroTituloProtestado = $valorPrimeiroTituloProtestado;
	}
	function get_valorPrimeiroTituloProtestado() {
		return $this->valorPrimeiroTituloProtestado;
	}
	function set_dataMaiorTituloProtestado($dataMaiorTituloProtestado) {
		$this->dataMaiorTituloProtestado = $dataMaiorTituloProtestado;
	}
	function get_dataMaiorTituloProtestado() {
		return $this->dataMaiorTituloProtestado;
	}
	function set_valorMaiorTituloProtestado($valorMaiorTituloProtestado) {
		$this->valorMaiorTituloProtestado = $valorMaiorTituloProtestado;
	}
	function get_valorMaiorTituloProtestado() {
		return $this->valorMaiorTituloProtestado;
	}
}
?>