<?php
public class localizacao {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoLogradouro;
	private $nomeLogradouro;
	private $numeroLogradouro;
	private $complemento;
	private $bairro;
	private $cidade;
	private $unidadeFederativa;
	private $cep;
	private $ddd_1;
	private $telefone_1;
	private $ddd_2;
	private $telefone_2;
	private $ddd_3;
	private $telefone_3;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoLogradouro, $nomeLogradouro, $numeroLogradouro, $complemento, $bairro, $cidade, $unidadeFederativa, $cep, $ddd_1, $telefone_1, $ddd_2, $telefone_2, $ddd_3, $telefone_3){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoLogradouro = $tipoLogradouro;
		$this->nomeLogradouro = $nomeLogradouro;
		$this->numeroLogradouro = $numeroLogradouro;
		$this->complemento = $complemento;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->unidadeFederativa = $unidadeFederativa;
		$this->cep = $cep;
		$this->ddd_1 = $ddd_1;
		$this->telefone_1 = $telefone_1;
		$this->ddd_2 = $ddd_2;
		$this->telefone_2 = $telefone_2;
		$this->ddd_3 = $ddd_3;
		$this->telefone_3 = $telefone_3;
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
	function set_tipoLogradouro($tipoLogradouro) {
		$this->tipoLogradouro = $tipoLogradouro;
	}
	function get_tipoLogradouro() {
		return $this->tipoLogradouro;
	}
	function set_nomeLogradouro($nomeLogradouro) {
		$this->nomeLogradouro = $nomeLogradouro;
	}
	function get_nomeLogradouro() {
		return $this->nomeLogradouro;
	}
	function set_numeroLogradouro($numeroLogradouro) {
		$this->numeroLogradouro = $numeroLogradouro;
	}
	function get_numeroLogradouro() {
		return $this->numeroLogradouro;
	}
	function set_complemento($complemento) {
		$this->complemento = $complemento;
	}
	function get_complemento() {
		return $this->complemento;
	}
	function set_bairro($bairro) {
		$this->bairro = $bairro;
	}
	function get_bairro() {
		return $this->bairro;
	}
	function set_cidade($cidade) {
		$this->cidade = $cidade;
	}
	function get_cidade() {
		return $this->cidade;
	}
	function set_unidadeFederativa($unidadeFederativa) {
		$this->unidadeFederativa = $unidadeFederativa;
	}
	function get_unidadeFederativa() {
		return $this->unidadeFederativa;
	}
	function set_cep($cep) {
		$this->cep = $cep;
	}
	function get_cep() {
		return $this->cep;
	}
	function set_ddd_1($ddd_1) {
		$this->ddd_1 = $ddd_1;
	}
	function get_ddd_1() {
		return $this->ddd_1;
	}
	function set_telefone_1($telefone_1) {
		$this->telefone_1 = $telefone_1;
	}
	function get_telefone_1() {
		return $this->telefone_1;
	}
	function set_ddd_2($ddd_2) {
		$this->ddd_2 = $ddd_2;
	}
	function get_ddd_2() {
		return $this->ddd_2;
	}
	function set_telefone_2($telefone_2) {
		$this->telefone_2 = $telefone_2;
	}
	function get_telefone_2() {
		return $this->telefone_2;
	}
	function set_ddd_3($ddd_3) {
		$this->ddd_3 = $ddd_3;
	}
	function get_ddd_3() {
		return $this->ddd_3;
	}
	function set_telefone_3($telefone_3) {
		$this->telefone_3 = $telefone_3;
	}
	function get_telefone_3() {
		return $this->telefone_3;
	}
}
?>