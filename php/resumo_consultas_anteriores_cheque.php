<?php
public class resumo_consultas_anteriores_cheque {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $numeroDocumento;
	private $total;
	private $valor;
	private $dia;
	private $valorDia;
	private $preDatado;
	private $valorPreDatado;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $numeroDocumento, $total, $valor, $dia, $valorDia, $preDatado, $valorPreDatado){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->total = $total;
		$this->valor = $valor;
		$this->dia = $dia;
		$this->valorDia = $valorDia;
		$this->preDatado = $preDatado;
		$this->valorPreDatado = $valorPreDatado;
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
	function set_numeroDocumento($numeroDocumento) {
		$this->numeroDocumento = $numeroDocumento;
	}
	function get_numeroDocumento() {
		return $this->numeroDocumento;
	}
	function set_total($total) {
		$this->total = $total;
	}
	function get_total() {
		return $this->total;
	}
	function set_valor($valor) {
		$this->valor = $valor;
	}
	function get_valor() {
		return $this->valor;
	}
	function set_dia($dia) {
		$this->dia = $dia;
	}
	function get_dia() {
		return $this->dia;
	}
	function set_valorDia($valorDia) {
		$this->valorDia = $valorDia;
	}
	function get_valorDia() {
		return $this->valorDia;
	}
	function set_preDatado($preDatado) {
		$this->preDatado = $preDatado;
	}
	function get_preDatado() {
		return $this->preDatado;
	}
	function set_valorPreDatado($valorPreDatado) {
		$this->valorPreDatado = $valorPreDatado;
	}
	function get_valorPreDatado() {
		return $this->valorPreDatado;
	}
}
?>