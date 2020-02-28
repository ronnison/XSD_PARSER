<?php
public class relacao_falencia_recuperacao_judicial {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $numeroDocumento;
	private $razaoSocial;
	private $tipoOcorrencia;
	private $cartorio;
	private $dataOcorrencia;
	private $praca;
	private $uf;
	private $codigoMunicipio;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $numeroDocumento, $razaoSocial, $tipoOcorrencia, $cartorio, $dataOcorrencia, $praca, $uf, $codigoMunicipio){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->razaoSocial = $razaoSocial;
		$this->tipoOcorrencia = $tipoOcorrencia;
		$this->cartorio = $cartorio;
		$this->dataOcorrencia = $dataOcorrencia;
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
	function set_razaoSocial($razaoSocial) {
		$this->razaoSocial = $razaoSocial;
	}
	function get_razaoSocial() {
		return $this->razaoSocial;
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