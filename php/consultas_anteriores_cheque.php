<?php
public class consultas_anteriores_cheque {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $numeroDocumento;
	private $tipo;
	private $dataCredito;
	private $horaCredito;
	private $moeda;
	private $valor;
	private $informante;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $numeroDocumento, $tipo, $dataCredito, $horaCredito, $moeda, $valor, $informante){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->tipo = $tipo;
		$this->dataCredito = $dataCredito;
		$this->horaCredito = $horaCredito;
		$this->moeda = $moeda;
		$this->valor = $valor;
		$this->informante = $informante;
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
	function set_tipo($tipo) {
		$this->tipo = $tipo;
	}
	function get_tipo() {
		return $this->tipo;
	}
	function set_dataCredito($dataCredito) {
		$this->dataCredito = $dataCredito;
	}
	function get_dataCredito() {
		return $this->dataCredito;
	}
	function set_horaCredito($horaCredito) {
		$this->horaCredito = $horaCredito;
	}
	function get_horaCredito() {
		return $this->horaCredito;
	}
	function set_moeda($moeda) {
		$this->moeda = $moeda;
	}
	function get_moeda() {
		return $this->moeda;
	}
	function set_valor($valor) {
		$this->valor = $valor;
	}
	function get_valor() {
		return $this->valor;
	}
	function set_informante($informante) {
		$this->informante = $informante;
	}
	function get_informante() {
		return $this->informante;
	}
}
?>