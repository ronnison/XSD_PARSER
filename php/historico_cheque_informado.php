<?php
public class historico_cheque_informado {
	private $tamanho;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $numeroDocumento;
	private $banco;
	private $agencia;
	private $contaCorrente;
	private $cheque;
	private $dataConsulta;
	private $horaConsulta;
	private $rede;

	// Methods Construtor and Destrutor
	function __construct ($tamanho, $tipoRegistro, $registro, $tipoDocumento, $numeroDocumento, $banco, $agencia, $contaCorrente, $cheque, $dataConsulta, $horaConsulta, $rede){
		$this->tamanho = $tamanho;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->banco = $banco;
		$this->agencia = $agencia;
		$this->contaCorrente = $contaCorrente;
		$this->cheque = $cheque;
		$this->dataConsulta = $dataConsulta;
		$this->horaConsulta = $horaConsulta;
		$this->rede = $rede;
	}
	// Methods Getter and Setter
	function set_tamanho($tamanho) {
		$this->tamanho = $tamanho;
	}
	function get_tamanho() {
		return $this->tamanho;
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
	function set_cheque($cheque) {
		$this->cheque = $cheque;
	}
	function get_cheque() {
		return $this->cheque;
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
	function set_rede($rede) {
		$this->rede = $rede;
	}
	function get_rede() {
		return $this->rede;
	}
}
?>