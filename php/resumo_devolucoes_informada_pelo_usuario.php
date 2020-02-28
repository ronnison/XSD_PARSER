<?php
public class resumo_devolucoes_informada_pelo_usuario {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $numeroDocumento;
	private $total;
	private $dataPrimeiraDevolucao;
	private $dataUltimaDevolucao;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $numeroDocumento, $total, $dataPrimeiraDevolucao, $dataUltimaDevolucao){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->total = $total;
		$this->dataPrimeiraDevolucao = $dataPrimeiraDevolucao;
		$this->dataUltimaDevolucao = $dataUltimaDevolucao;
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
	function set_total($total) {
		$this->total = $total;
	}
	function get_total() {
		return $this->total;
	}
	function set_dataPrimeiraDevolucao($dataPrimeiraDevolucao) {
		$this->dataPrimeiraDevolucao = $dataPrimeiraDevolucao;
	}
	function get_dataPrimeiraDevolucao() {
		return $this->dataPrimeiraDevolucao;
	}
	function set_dataUltimaDevolucao($dataUltimaDevolucao) {
		$this->dataUltimaDevolucao = $dataUltimaDevolucao;
	}
	function get_dataUltimaDevolucao() {
		return $this->dataUltimaDevolucao;
	}
}
?>