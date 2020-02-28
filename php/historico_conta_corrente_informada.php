<?php
public class historico_conta_corrente_informada {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $banco;
	private $agencia;
	private $contaCorrente;
	private $tipoDocumento;
	private $numeroDocumento;
	private $dataConsulta;
	private $horaConsulta;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $banco, $agencia, $contaCorrente, $tipoDocumento, $numeroDocumento, $dataConsulta, $horaConsulta){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->banco = $banco;
		$this->agencia = $agencia;
		$this->contaCorrente = $contaCorrente;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->dataConsulta = $dataConsulta;
		$this->horaConsulta = $horaConsulta;
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
	function set_banco($banco) {
		$this->banco = $banco;
	}
	function get_banco() {
		return $this->banco;
	}
	function set_agencia($agencia) {
		$this->agencia = $agencia;
	}
	function get_agencia() {
		return $this->agencia;
	}
	function set_contaCorrente($contaCorrente) {
		$this->contaCorrente = $contaCorrente;
	}
	function get_contaCorrente() {
		return $this->contaCorrente;
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
	function set_dataConsulta($dataConsulta) {
		$this->dataConsulta = $dataConsulta;
	}
	function get_dataConsulta() {
		return $this->dataConsulta;
	}
	function set_horaConsulta($horaConsulta) {
		$this->horaConsulta = $horaConsulta;
	}
	function get_horaConsulta() {
		return $this->horaConsulta;
	}
}
?>