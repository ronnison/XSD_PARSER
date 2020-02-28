<?php
public class consultas_anteriores {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoOcorrencia;
	private $data;
	private $moeda;
	private $valor;
	private $informante;
	private $produto;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoOcorrencia, $data, $moeda, $valor, $informante, $produto){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoOcorrencia = $tipoOcorrencia;
		$this->data = $data;
		$this->moeda = $moeda;
		$this->valor = $valor;
		$this->informante = $informante;
		$this->produto = $produto;
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
	function set_data($data) {
		$this->data = $data;
	}
	function get_data() {
		return $this->data;
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
	function set_produto($produto) {
		$this->produto = $produto;
	}
	function get_produto() {
		return $this->produto;
	}
}
?>