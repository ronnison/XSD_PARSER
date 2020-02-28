<?php
public class participacoes_do_documento_consultado {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumentoA;
	private $numeroDocumentoA;
	private $razaoSocial;
	private $tipoMoeda;
	private $valor;
	private $observacao;
	private $valorEmPercentual;
	private $dataDeEntrada;
	private $funcao;
	private $tipoDocumentoB;
	private $numeroDocumentoB;
	private $tipoSocio;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumentoA, $numeroDocumentoA, $razaoSocial, $tipoMoeda, $valor, $observacao, $valorEmPercentual, $dataDeEntrada, $funcao, $tipoDocumentoB, $numeroDocumentoB, $tipoSocio){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumentoA = $tipoDocumentoA;
		$this->numeroDocumentoA = $numeroDocumentoA;
		$this->razaoSocial = $razaoSocial;
		$this->tipoMoeda = $tipoMoeda;
		$this->valor = $valor;
		$this->observacao = $observacao;
		$this->valorEmPercentual = $valorEmPercentual;
		$this->dataDeEntrada = $dataDeEntrada;
		$this->funcao = $funcao;
		$this->tipoDocumentoB = $tipoDocumentoB;
		$this->numeroDocumentoB = $numeroDocumentoB;
		$this->tipoSocio = $tipoSocio;
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
	function set_tipoDocumentoA($tipoDocumentoA) {
		$this->tipoDocumentoA = $tipoDocumentoA;
	}
	function get_tipoDocumentoA() {
		return $this->tipoDocumentoA;
	}
	function set_numeroDocumentoA($numeroDocumentoA) {
		$this->numeroDocumentoA = $numeroDocumentoA;
	}
	function get_numeroDocumentoA() {
		return $this->numeroDocumentoA;
	}
	function set_razaoSocial($razaoSocial) {
		$this->razaoSocial = $razaoSocial;
	}
	function get_razaoSocial() {
		return $this->razaoSocial;
	}
	function set_tipoMoeda($tipoMoeda) {
		$this->tipoMoeda = $tipoMoeda;
	}
	function get_tipoMoeda() {
		return $this->tipoMoeda;
	}
	function set_valor($valor) {
		$this->valor = $valor;
	}
	function get_valor() {
		return $this->valor;
	}
	function set_observacao($observacao) {
		$this->observacao = $observacao;
	}
	function get_observacao() {
		return $this->observacao;
	}
	function set_valorEmPercentual($valorEmPercentual) {
		$this->valorEmPercentual = $valorEmPercentual;
	}
	function get_valorEmPercentual() {
		return $this->valorEmPercentual;
	}
	function set_dataDeEntrada($dataDeEntrada) {
		$this->dataDeEntrada = $dataDeEntrada;
	}
	function get_dataDeEntrada() {
		return $this->dataDeEntrada;
	}
	function set_funcao($funcao) {
		$this->funcao = $funcao;
	}
	function get_funcao() {
		return $this->funcao;
	}
	function set_tipoDocumentoB($tipoDocumentoB) {
		$this->tipoDocumentoB = $tipoDocumentoB;
	}
	function get_tipoDocumentoB() {
		return $this->tipoDocumentoB;
	}
	function set_numeroDocumentoB($numeroDocumentoB) {
		$this->numeroDocumentoB = $numeroDocumentoB;
	}
	function get_numeroDocumentoB() {
		return $this->numeroDocumentoB;
	}
	function set_tipoSocio($tipoSocio) {
		$this->tipoSocio = $tipoSocio;
	}
	function get_tipoSocio() {
		return $this->tipoSocio;
	}
}
?>