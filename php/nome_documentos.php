<?php
public class nome_documentos {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $nome;
	private $nascimento;
	private $tipoDocumento;
	private $numeroDocumento;
	private $documento_2;
	private $documento_3;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $nome, $nascimento, $tipoDocumento, $numeroDocumento, $documento_2, $documento_3){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->nome = $nome;
		$this->nascimento = $nascimento;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->documento_2 = $documento_2;
		$this->documento_3 = $documento_3;
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
	function set_nome($nome) {
		$this->nome = $nome;
	}
	function get_nome() {
		return $this->nome;
	}
	function set_nascimento($nascimento) {
		$this->nascimento = $nascimento;
	}
	function get_nascimento() {
		return $this->nascimento;
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
	function set_documento_2($documento_2) {
		$this->documento_2 = $documento_2;
	}
	function get_documento_2() {
		return $this->documento_2;
	}
	function set_documento_3($documento_3) {
		$this->documento_3 = $documento_3;
	}
	function get_documento_3() {
		return $this->documento_3;
	}
}
?>