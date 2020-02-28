<?php
public class devolucoes_informadas_pelo_usuario {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $documento;
	private $banco;
	private $agencia;
	private $contaCorrente;
	private $chequeInicial;
	private $chequeFinal;
	private $motivo;
	private $alinea;
	private $dataOcorrencia;
	private $dataRegistro;
	private $moeda;
	private $valor;
	private $codigoInformante;
	private $informante;
	private $cidade;
	private $uf;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $documento, $banco, $agencia, $contaCorrente, $chequeInicial, $chequeFinal, $motivo, $alinea, $dataOcorrencia, $dataRegistro, $moeda, $valor, $codigoInformante, $informante, $cidade, $uf){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->documento = $documento;
		$this->banco = $banco;
		$this->agencia = $agencia;
		$this->contaCorrente = $contaCorrente;
		$this->chequeInicial = $chequeInicial;
		$this->chequeFinal = $chequeFinal;
		$this->motivo = $motivo;
		$this->alinea = $alinea;
		$this->dataOcorrencia = $dataOcorrencia;
		$this->dataRegistro = $dataRegistro;
		$this->moeda = $moeda;
		$this->valor = $valor;
		$this->codigoInformante = $codigoInformante;
		$this->informante = $informante;
		$this->cidade = $cidade;
		$this->uf = $uf;
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
	function set_documento($documento) {
		$this->documento = $documento;
	}
	function get_documento() {
		return $this->documento;
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
	function set_motivo($motivo) {
		$this->motivo = $motivo;
	}
	function get_motivo() {
		return $this->motivo;
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
	function set_dataRegistro($dataRegistro) {
		$this->dataRegistro = $dataRegistro;
	}
	function get_dataRegistro() {
		return $this->dataRegistro;
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
	function set_codigoInformante($codigoInformante) {
		$this->codigoInformante = $codigoInformante;
	}
	function get_codigoInformante() {
		return $this->codigoInformante;
	}
	function set_informante($informante) {
		$this->informante = $informante;
	}
	function get_informante() {
		return $this->informante;
	}
	function set_cidade($cidade) {
		$this->cidade = $cidade;
	}
	function get_cidade() {
		return $this->cidade;
	}
	function set_uf($uf) {
		$this->uf = $uf;
	}
	function get_uf() {
		return $this->uf;
	}
}
?>