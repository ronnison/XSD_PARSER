<?php
public class relacao_de_acoes_civeis {
	public $tamanhoRegistro;
	public $tipoRegistro;
	public $registro;
	public $vara;
	public $processo;
	public $acaoCivel;
	public $dataDistribuicao;
	public $autor;
	public $valor;
	public $praca;
	public $uf;
	public $codigoMunicipio;

	// Methods Construtor and Destrutor

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