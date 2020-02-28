<?php
public class titulos_protestados {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoOcorrencia;
	private $cartorio;
	private $dataOcorrencia;
	private $moeda;
	private $valor;
	private $cidade;
	private $uf;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoOcorrencia, $cartorio, $dataOcorrencia, $moeda, $valor, $cidade, $uf){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoOcorrencia = $tipoOcorrencia;
		$this->cartorio = $cartorio;
		$this->dataOcorrencia = $dataOcorrencia;
		$this->moeda = $moeda;
		$this->valor = $valor;
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
	function set_tipoOcorrencia($tipoOcorrencia) {
		$this->tipoOcorrencia = $tipoOcorrencia;
	}
	function get_tipoOcorrencia() {
		return $this->tipoOcorrencia;
	}
	function set_cartorio($cartorio) {
		$this->cartorio = $cartorio;
	}
	function get_cartorio() {
		return $this->cartorio;
	}
	function set_dataOcorrencia($dataOcorrencia) {
		$this->dataOcorrencia = $dataOcorrencia;
	}
	function get_dataOcorrencia() {
		return $this->dataOcorrencia;
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