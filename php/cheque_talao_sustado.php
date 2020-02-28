<?php
public class cheque_talao_sustado {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoOcorrencia;
	private $tipoDeDocumento;
	private $numeroDocumento;
	private $banco;
	private $agencia;
	private $contaCorrente;
	private $cheque;
	private $alinea;
	private $dataOcorrencia;
	private $dataDisponibilizacao;
	private $informante;
	private $indicador;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoOcorrencia, $tipoDeDocumento, $numeroDocumento, $banco, $agencia, $contaCorrente, $cheque, $alinea, $dataOcorrencia, $dataDisponibilizacao, $informante, $indicador){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoOcorrencia = $tipoOcorrencia;
		$this->tipoDeDocumento = $tipoDeDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->banco = $banco;
		$this->agencia = $agencia;
		$this->contaCorrente = $contaCorrente;
		$this->cheque = $cheque;
		$this->alinea = $alinea;
		$this->dataOcorrencia = $dataOcorrencia;
		$this->dataDisponibilizacao = $dataDisponibilizacao;
		$this->informante = $informante;
		$this->indicador = $indicador;
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
	function set_tipoOcorrencia($tipoOcorrencia) {
		$this->tipoOcorrencia = $tipoOcorrencia;
	}
	function get_tipoOcorrencia() {
		return $this->tipoOcorrencia;
	}
	function set_tipoDeDocumento($tipoDeDocumento) {
		$this->tipoDeDocumento = $tipoDeDocumento;
	}
	function get_tipoDeDocumento() {
		return $this->tipoDeDocumento;
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
	function set_alinea($alinea) {
		$this->alinea = $alinea;
	}
	function get_alinea() {
		return $this->alinea;
	}
	function set_dataOcorrencia($dataOcorrencia) {
		$this->dataOcorrencia = $dataOcorrencia;
	}
	function get_dataOcorrencia() {
		return $this->dataOcorrencia;
	}
	function set_dataDisponibilizacao($dataDisponibilizacao) {
		$this->dataDisponibilizacao = $dataDisponibilizacao;
	}
	function get_dataDisponibilizacao() {
		return $this->dataDisponibilizacao;
	}
	function set_informante($informante) {
		$this->informante = $informante;
	}
	function get_informante() {
		return $this->informante;
	}
	function set_indicador($indicador) {
		$this->indicador = $indicador;
	}
	function get_indicador() {
		return $this->indicador;
	}
}
?>