<?php
public class titulos_protestados_outros_estados {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoOcorrencia;
	private $cartorio;
	private $dataOcorrencia;
	private $constantes;
	private $moeda;
	private $valor;
	private $praca;
	private $uf;
	private $codigoMunicipio;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoOcorrencia, $cartorio, $dataOcorrencia, $constantes, $moeda, $valor, $praca, $uf, $codigoMunicipio){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoOcorrencia = $tipoOcorrencia;
		$this->cartorio = $cartorio;
		$this->dataOcorrencia = $dataOcorrencia;
		$this->constantes = $constantes;
		$this->moeda = $moeda;
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
	function set_constantes($constantes) {
		$this->constantes = $constantes;
	}
	function get_constantes() {
		return $this->constantes;
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