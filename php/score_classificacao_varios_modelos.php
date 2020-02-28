<?php
public class score_classificacao_varios_modelos {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoScore;
	private $score;
	private $valor;
	private $planoExecucao;
	private $modeloPlano;
	private $nomePlano;
	private $modeloScore;
	private $nomeScore;
	private $classificacaoNumerica;
	private $classificacaoAlfabetica;
	private $probabilidade;
	private $texto;
	private $codigoNaturezaModelo;
	private $descricaoNatureza;
	private $texto2;
	private $mensagem;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoScore, $score, $valor, $planoExecucao, $modeloPlano, $nomePlano, $modeloScore, $nomeScore, $classificacaoNumerica, $classificacaoAlfabetica, $probabilidade, $texto, $codigoNaturezaModelo, $descricaoNatureza, $texto2, $mensagem){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoScore = $tipoScore;
		$this->score = $score;
		$this->valor = $valor;
		$this->planoExecucao = $planoExecucao;
		$this->modeloPlano = $modeloPlano;
		$this->nomePlano = $nomePlano;
		$this->modeloScore = $modeloScore;
		$this->nomeScore = $nomeScore;
		$this->classificacaoNumerica = $classificacaoNumerica;
		$this->classificacaoAlfabetica = $classificacaoAlfabetica;
		$this->probabilidade = $probabilidade;
		$this->texto = $texto;
		$this->codigoNaturezaModelo = $codigoNaturezaModelo;
		$this->descricaoNatureza = $descricaoNatureza;
		$this->texto2 = $texto2;
		$this->mensagem = $mensagem;
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
	function set_tipoScore($tipoScore) {
		$this->tipoScore = $tipoScore;
	}
	function get_tipoScore() {
		return $this->tipoScore;
	}
	function set_score($score) {
		$this->score = $score;
	}
	function get_score() {
		return $this->score;
	}
	function set_valor($valor) {
		$this->valor = $valor;
	}
	function get_valor() {
		return $this->valor;
	}
	function set_planoExecucao($planoExecucao) {
		$this->planoExecucao = $planoExecucao;
	}
	function get_planoExecucao() {
		return $this->planoExecucao;
	}
	function set_modeloPlano($modeloPlano) {
		$this->modeloPlano = $modeloPlano;
	}
	function get_modeloPlano() {
		return $this->modeloPlano;
	}
	function set_nomePlano($nomePlano) {
		$this->nomePlano = $nomePlano;
	}
	function get_nomePlano() {
		return $this->nomePlano;
	}
	function set_modeloScore($modeloScore) {
		$this->modeloScore = $modeloScore;
	}
	function get_modeloScore() {
		return $this->modeloScore;
	}
	function set_nomeScore($nomeScore) {
		$this->nomeScore = $nomeScore;
	}
	function get_nomeScore() {
		return $this->nomeScore;
	}
	function set_classificacaoNumerica($classificacaoNumerica) {
		$this->classificacaoNumerica = $classificacaoNumerica;
	}
	function get_classificacaoNumerica() {
		return $this->classificacaoNumerica;
	}
	function set_classificacaoAlfabetica($classificacaoAlfabetica) {
		$this->classificacaoAlfabetica = $classificacaoAlfabetica;
	}
	function get_classificacaoAlfabetica() {
		return $this->classificacaoAlfabetica;
	}
	function set_probabilidade($probabilidade) {
		$this->probabilidade = $probabilidade;
	}
	function get_probabilidade() {
		return $this->probabilidade;
	}
	function set_texto($texto) {
		$this->texto = $texto;
	}
	function get_texto() {
		return $this->texto;
	}
	function set_codigoNaturezaModelo($codigoNaturezaModelo) {
		$this->codigoNaturezaModelo = $codigoNaturezaModelo;
	}
	function get_codigoNaturezaModelo() {
		return $this->codigoNaturezaModelo;
	}
	function set_descricaoNatureza($descricaoNatureza) {
		$this->descricaoNatureza = $descricaoNatureza;
	}
	function get_descricaoNatureza() {
		return $this->descricaoNatureza;
	}
	function set_texto2($texto2) {
		$this->texto2 = $texto2;
	}
	function get_texto2() {
		return $this->texto2;
	}
	function set_mensagem($mensagem) {
		$this->mensagem = $mensagem;
	}
	function get_mensagem() {
		return $this->mensagem;
	}
}
?>