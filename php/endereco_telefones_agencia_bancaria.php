<?php
public class endereco_telefones_agencia_bancaria {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $banco;
	private $nomeBanco;
	private $agencia;
	private $nomeAgencia;
	private $endereco;
	private $bairro;
	private $cep;
	private $cidade;
	private $uf;
	private $praca;
	private $ddd;
	private $telefone_1;
	private $telefone_2;
	private $reservado;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $banco, $nomeBanco, $agencia, $nomeAgencia, $endereco, $bairro, $cep, $cidade, $uf, $praca, $ddd, $telefone_1, $telefone_2, $reservado){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->banco = $banco;
		$this->nomeBanco = $nomeBanco;
		$this->agencia = $agencia;
		$this->nomeAgencia = $nomeAgencia;
		$this->endereco = $endereco;
		$this->bairro = $bairro;
		$this->cep = $cep;
		$this->cidade = $cidade;
		$this->uf = $uf;
		$this->praca = $praca;
		$this->ddd = $ddd;
		$this->telefone_1 = $telefone_1;
		$this->telefone_2 = $telefone_2;
		$this->reservado = $reservado;
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
	function set_banco($banco) {
		$this->banco = $banco;
	}
	function get_banco() {
		return $this->banco;
	}
	function set_nomeBanco($nomeBanco) {
		$this->nomeBanco = $nomeBanco;
	}
	function get_nomeBanco() {
		return $this->nomeBanco;
	}
	function set_agencia($agencia) {
		$this->agencia = $agencia;
	}
	function get_agencia() {
		return $this->agencia;
	}
	function set_nomeAgencia($nomeAgencia) {
		$this->nomeAgencia = $nomeAgencia;
	}
	function get_nomeAgencia() {
		return $this->nomeAgencia;
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
	function set_praca($praca) {
		$this->praca = $praca;
	}
	function get_praca() {
		return $this->praca;
	}
	function set_ddd($ddd) {
		$this->ddd = $ddd;
	}
	function get_ddd() {
		return $this->ddd;
	}
	function set_telefone_1($telefone_1) {
		$this->telefone_1 = $telefone_1;
	}
	function get_telefone_1() {
		return $this->telefone_1;
	}
	function set_telefone_2($telefone_2) {
		$this->telefone_2 = $telefone_2;
	}
	function get_telefone_2() {
		return $this->telefone_2;
	}
	function set_reservado($reservado) {
		$this->reservado = $reservado;
	}
	function get_reservado() {
		return $this->reservado;
	}
}
?>