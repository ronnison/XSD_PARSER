<?php
public class resumo_consultas_anteriores {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $numeroDocumento;
	private $totalDeConsultas;
	private $periodoInicial;
	private $periodoFinal;
	private $totalUltimoMes;
	private $periodo;
	private $totalPenultimoMes;
	private $periodoPenultimoMes;
	private $totalAntePenultimoMes;
	private $periodoAntePenultimoMes;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $numeroDocumento, $totalDeConsultas, $periodoInicial, $periodoFinal, $totalUltimoMes, $periodo, $totalPenultimoMes, $periodoPenultimoMes, $totalAntePenultimoMes, $periodoAntePenultimoMes){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->totalDeConsultas = $totalDeConsultas;
		$this->periodoInicial = $periodoInicial;
		$this->periodoFinal = $periodoFinal;
		$this->totalUltimoMes = $totalUltimoMes;
		$this->periodo = $periodo;
		$this->totalPenultimoMes = $totalPenultimoMes;
		$this->periodoPenultimoMes = $periodoPenultimoMes;
		$this->totalAntePenultimoMes = $totalAntePenultimoMes;
		$this->periodoAntePenultimoMes = $periodoAntePenultimoMes;
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
	function set_totalDeConsultas($totalDeConsultas) {
		$this->totalDeConsultas = $totalDeConsultas;
	}
	function get_totalDeConsultas() {
		return $this->totalDeConsultas;
	}
	function set_periodoInicial($periodoInicial) {
		$this->periodoInicial = $periodoInicial;
	}
	function get_periodoInicial() {
		return $this->periodoInicial;
	}
	function set_periodoFinal($periodoFinal) {
		$this->periodoFinal = $periodoFinal;
	}
	function get_periodoFinal() {
		return $this->periodoFinal;
	}
	function set_totalUltimoMes($totalUltimoMes) {
		$this->totalUltimoMes = $totalUltimoMes;
	}
	function get_totalUltimoMes() {
		return $this->totalUltimoMes;
	}
	function set_periodo($periodo) {
		$this->periodo = $periodo;
	}
	function get_periodo() {
		return $this->periodo;
	}
	function set_totalPenultimoMes($totalPenultimoMes) {
		$this->totalPenultimoMes = $totalPenultimoMes;
	}
	function get_totalPenultimoMes() {
		return $this->totalPenultimoMes;
	}
	function set_periodoPenultimoMes($periodoPenultimoMes) {
		$this->periodoPenultimoMes = $periodoPenultimoMes;
	}
	function get_periodoPenultimoMes() {
		return $this->periodoPenultimoMes;
	}
	function set_totalAntePenultimoMes($totalAntePenultimoMes) {
		$this->totalAntePenultimoMes = $totalAntePenultimoMes;
	}
	function get_totalAntePenultimoMes() {
		return $this->totalAntePenultimoMes;
	}
	function set_periodoAntePenultimoMes($periodoAntePenultimoMes) {
		$this->periodoAntePenultimoMes = $periodoAntePenultimoMes;
	}
	function get_periodoAntePenultimoMes() {
		return $this->periodoAntePenultimoMes;
	}
}
?>