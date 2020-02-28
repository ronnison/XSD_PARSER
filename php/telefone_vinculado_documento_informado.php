<?php
public class telefone_vinculado_documento_informado {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $ddd;
	private $telefone;
	private $endereco;
	private $bairro;
	private $cep;
	private $cidade;
	private $uf;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $ddd, $telefone, $endereco, $bairro, $cep, $cidade, $uf){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->ddd = $ddd;
		$this->telefone = $telefone;
		$this->endereco = $endereco;
		$this->bairro = $bairro;
		$this->cep = $cep;
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
	function set_ddd($ddd) {
		$this->ddd = $ddd;
	}
	function get_ddd() {
		return $this->ddd;
	}
	function set_telefone($telefone) {
		$this->telefone = $telefone;
	}
	function get_telefone() {
		return $this->telefone;
	}
	function set_endereco($endereco) {
		$this->endereco = $endereco;
	}
	function get_endereco() {
		return $this->endereco;
	}
	function set_bairro($bairro) {
		$this->bairro = $bairro;
	}
	function get_bairro() {
		return $this->bairro;
	}
	function set_cep($cep) {
		$this->cep = $cep;
	}
	function get_cep() {
		return $this->cep;
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