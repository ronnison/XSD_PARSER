<?php
public class resumoConsultas_anteriores_90_dias {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $total;
	private $ano_1;
	private $mes_1;
	private $total_1;
	private $ano_2;
	private $mes_2;
	private $total_2;
	private $ano_3;
	private $mes_3;
	private $total_3;
	private $ano_4;
	private $mes_4;
	private $total_4;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $total, $ano_1, $mes_1, $total_1, $ano_2, $mes_2, $total_2, $ano_3, $mes_3, $total_3, $ano_4, $mes_4, $total_4){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->total = $total;
		$this->ano_1 = $ano_1;
		$this->mes_1 = $mes_1;
		$this->total_1 = $total_1;
		$this->ano_2 = $ano_2;
		$this->mes_2 = $mes_2;
		$this->total_2 = $total_2;
		$this->ano_3 = $ano_3;
		$this->mes_3 = $mes_3;
		$this->total_3 = $total_3;
		$this->ano_4 = $ano_4;
		$this->mes_4 = $mes_4;
		$this->total_4 = $total_4;
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
	function set_total($total) {
		$this->total = $total;
	}
	function get_total() {
		return $this->total;
	}
	function set_ano_1($ano_1) {
		$this->ano_1 = $ano_1;
	}
	function get_ano_1() {
		return $this->ano_1;
	}
	function set_mes_1($mes_1) {
		$this->mes_1 = $mes_1;
	}
	function get_mes_1() {
		return $this->mes_1;
	}
	function set_total_1($total_1) {
		$this->total_1 = $total_1;
	}
	function get_total_1() {
		return $this->total_1;
	}
	function set_ano_2($ano_2) {
		$this->ano_2 = $ano_2;
	}
	function get_ano_2() {
		return $this->ano_2;
	}
	function set_mes_2($mes_2) {
		$this->mes_2 = $mes_2;
	}
	function get_mes_2() {
		return $this->mes_2;
	}
	function set_total_2($total_2) {
		$this->total_2 = $total_2;
	}
	function get_total_2() {
		return $this->total_2;
	}
	function set_ano_3($ano_3) {
		$this->ano_3 = $ano_3;
	}
	function get_ano_3() {
		return $this->ano_3;
	}
	function set_mes_3($mes_3) {
		$this->mes_3 = $mes_3;
	}
	function get_mes_3() {
		return $this->mes_3;
	}
	function set_total_3($total_3) {
		$this->total_3 = $total_3;
	}
	function get_total_3() {
		return $this->total_3;
	}
	function set_ano_4($ano_4) {
		$this->ano_4 = $ano_4;
	}
	function get_ano_4() {
		return $this->ano_4;
	}
	function set_mes_4($mes_4) {
		$this->mes_4 = $mes_4;
	}
	function get_mes_4() {
		return $this->mes_4;
	}
	function set_total_4($total_4) {
		$this->total_4 = $total_4;
	}
	function get_total_4() {
		return $this->total_4;
	}
}
?>