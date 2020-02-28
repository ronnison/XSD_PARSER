<?php
public class relacao_de_acoes_civeis {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $vara;
	private $processo;
	private $acaoCivel;
	private $dataDistribuicao;
	private $autor;
	private $valor;
	private $praca;
	private $uf;
	private $codigoMunicipio;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $vara, $processo, $acaoCivel, $dataDistribuicao, $autor, $valor, $praca, $uf, $codigoMunicipio){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->vara = $vara;
		$this->processo = $processo;
		$this->acaoCivel = $acaoCivel;
		$this->dataDistribuicao = $dataDistribuicao;
		$this->autor = $autor;
		$this->valor = $valor;
		$this->praca = $praca;
		$this->uf = $uf;
		$this->codigoMunicipio = $codigoMunicipio;
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
	function set_vara($vara) {
		$this->vara = $vara;
	}
	function get_vara() {
		return $this->vara;
	}
	function set_processo($processo) {
		$this->processo = $processo;
	}
	function get_processo() {
		return $this->processo;
	}
	function set_acaoCivel($acaoCivel) {
		$this->acaoCivel = $acaoCivel;
	}
	function get_acaoCivel() {
		return $this->acaoCivel;
	}
	function set_dataDistribuicao($dataDistribuicao) {
		$this->dataDistribuicao = $dataDistribuicao;
	}
	function get_dataDistribuicao() {
		return $this->dataDistribuicao;
	}
	function set_autor($autor) {
		$this->autor = $autor;
	}
	function get_autor() {
		return $this->autor;
	}
	function set_valor($valor) {
		$this->valor = $valor;
	}
	function get_valor() {
		return $this->valor;
	}
	function set_praca($praca) {
		$this->praca = $praca;
	}
	function get_praca() {
		return $this->praca;
	}
	function set_uf($uf) {
		$this->uf = $uf;
	}
	function get_uf() {
		return $this->uf;
	}
	function set_codigoMunicipio($codigoMunicipio) {
		$this->codigoMunicipio = $codigoMunicipio;
	}
	function get_codigoMunicipio() {
		return $this->codigoMunicipio;
	}
}
?>