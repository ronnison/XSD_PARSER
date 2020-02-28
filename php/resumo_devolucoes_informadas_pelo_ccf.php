<?php
public class resumo_devolucoes_informadas_pelo_ccf {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $numeroDocumento;
	private $nome;
	private $totalNomes;
	private $totalDevolucoes;
	private $motivo_12;
	private $motivo_13;
	private $motivo_14;
	private $motivo_99;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $numeroDocumento, $nome, $totalNomes, $totalDevolucoes, $motivo_12, $motivo_13, $motivo_14, $motivo_99){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->nome = $nome;
		$this->totalNomes = $totalNomes;
		$this->totalDevolucoes = $totalDevolucoes;
		$this->motivo_12 = $motivo_12;
		$this->motivo_13 = $motivo_13;
		$this->motivo_14 = $motivo_14;
		$this->motivo_99 = $motivo_99;
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
	function set_nome($nome) {
		$this->nome = $nome;
	}
	function get_nome() {
		return $this->nome;
	}
	function set_totalNomes($totalNomes) {
		$this->totalNomes = $totalNomes;
	}
	function get_totalNomes() {
		return $this->totalNomes;
	}
	function set_totalDevolucoes($totalDevolucoes) {
		$this->totalDevolucoes = $totalDevolucoes;
	}
	function get_totalDevolucoes() {
		return $this->totalDevolucoes;
	}
	function set_motivo_12($motivo_12) {
		$this->motivo_12 = $motivo_12;
	}
	function get_motivo_12() {
		return $this->motivo_12;
	}
	function set_motivo_13($motivo_13) {
		$this->motivo_13 = $motivo_13;
	}
	function get_motivo_13() {
		return $this->motivo_13;
	}
	function set_motivo_14($motivo_14) {
		$this->motivo_14 = $motivo_14;
	}
	function get_motivo_14() {
		return $this->motivo_14;
	}
	function set_motivo_99($motivo_99) {
		$this->motivo_99 = $motivo_99;
	}
	function get_motivo_99() {
		return $this->motivo_99;
	}
}
?>