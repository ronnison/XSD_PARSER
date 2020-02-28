<?php
public class relacao_consultas_anteriores_credito_segmento {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoDocumento;
	private $documento;
	private $tipoOcorrencia;
	private $data;
	private $moeda;
	private $valor;
	private $informante;
	private $ramoAtividade;
	private $descricaoRamo;
	private $grupo;
	private $descricaoGrupo;
	private $segmento;
	private $descricaoSegmento;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoDocumento, $documento, $tipoOcorrencia, $data, $moeda, $valor, $informante, $ramoAtividade, $descricaoRamo, $grupo, $descricaoGrupo, $segmento, $descricaoSegmento){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoDocumento = $tipoDocumento;
		$this->documento = $documento;
		$this->tipoOcorrencia = $tipoOcorrencia;
		$this->data = $data;
		$this->moeda = $moeda;
		$this->valor = $valor;
		$this->informante = $informante;
		$this->ramoAtividade = $ramoAtividade;
		$this->descricaoRamo = $descricaoRamo;
		$this->grupo = $grupo;
		$this->descricaoGrupo = $descricaoGrupo;
		$this->segmento = $segmento;
		$this->descricaoSegmento = $descricaoSegmento;
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
	function set_documento($documento) {
		$this->documento = $documento;
	}
	function get_documento() {
		return $this->documento;
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
	function set_ramoAtividade($ramoAtividade) {
		$this->ramoAtividade = $ramoAtividade;
	}
	function get_ramoAtividade() {
		return $this->ramoAtividade;
	}
	function set_descricaoRamo($descricaoRamo) {
		$this->descricaoRamo = $descricaoRamo;
	}
	function get_descricaoRamo() {
		return $this->descricaoRamo;
	}
	function set_grupo($grupo) {
		$this->grupo = $grupo;
	}
	function get_grupo() {
		return $this->grupo;
	}
	function set_descricaoGrupo($descricaoGrupo) {
		$this->descricaoGrupo = $descricaoGrupo;
	}
	function get_descricaoGrupo() {
		return $this->descricaoGrupo;
	}
	function set_segmento($segmento) {
		$this->segmento = $segmento;
	}
	function get_segmento() {
		return $this->segmento;
	}
	function set_descricaoSegmento($descricaoSegmento) {
		$this->descricaoSegmento = $descricaoSegmento;
	}
	function get_descricaoSegmento() {
		return $this->descricaoSegmento;
	}
}
?>