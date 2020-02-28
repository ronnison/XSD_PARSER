<?php
public class cheques_sustados_pelo_motivo_21 {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $numeroDocumento;
	private $banco;
	private $agencia;
	private $contaCorrente;
	private $chequeInicial;
	private $chequeFinal;
	private $alinea;
	private $dataOcorrencia;
	private $dataDisponibilizacao;
	private $moeda;
	private $valor;
	private $informante;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $numeroDocumento, $banco, $agencia, $contaCorrente, $chequeInicial, $chequeFinal, $alinea, $dataOcorrencia, $dataDisponibilizacao, $moeda, $valor, $informante){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->banco = $banco;
		$this->agencia = $agencia;
		$this->contaCorrente = $contaCorrente;
		$this->chequeInicial = $chequeInicial;
		$this->chequeFinal = $chequeFinal;
		$this->alinea = $alinea;
		$this->dataOcorrencia = $dataOcorrencia;
		$this->dataDisponibilizacao = $dataDisponibilizacao;
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
	function set_chequeInicial($chequeInicial) {
		$this->chequeInicial = $chequeInicial;
	}
	function get_chequeInicial() {
		return $this->chequeInicial;
	}
	function set_chequeFinal($chequeFinal) {
		$this->chequeFinal = $chequeFinal;
	}
	function get_chequeFinal() {
		return $this->chequeFinal;
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