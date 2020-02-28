<?php
public class debitos {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $tipoOcorrencia;
	private $contrato;
	private $dataOcorrencia;
	private $dataDisponibilizacao;
	private $moeda;
	private $valor;
	private $situacao;
	private $informante;
	private $informadoPeloConsulente;
	private $cidade;
	private $uf;
	private $condicao;
	private $condicaoMunicipio;
	private $segmento;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $tipoOcorrencia, $contrato, $dataOcorrencia, $dataDisponibilizacao, $moeda, $valor, $situacao, $informante, $informadoPeloConsulente, $cidade, $uf, $condicao, $condicaoMunicipio, $segmento){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->tipoOcorrencia = $tipoOcorrencia;
		$this->contrato = $contrato;
		$this->dataOcorrencia = $dataOcorrencia;
		$this->dataDisponibilizacao = $dataDisponibilizacao;
		$this->moeda = $moeda;
		$this->valor = $valor;
		$this->situacao = $situacao;
		$this->informante = $informante;
		$this->informadoPeloConsulente = $informadoPeloConsulente;
		$this->cidade = $cidade;
		$this->uf = $uf;
		$this->condicao = $condicao;
		$this->condicaoMunicipio = $condicaoMunicipio;
		$this->segmento = $segmento;
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
	function set_tipoOcorrencia($tipoOcorrencia) {
		$this->tipoOcorrencia = $tipoOcorrencia;
	}
	function get_tipoOcorrencia() {
		return $this->tipoOcorrencia;
	}
	function set_contrato($contrato) {
		$this->contrato = $contrato;
	}
	function get_contrato() {
		return $this->contrato;
	}
	function set_dataOcorrencia($dataOcorrencia) {
		$this->dataOcorrencia = $dataOcorrencia;
	}
	function get_dataOcorrencia() {
		return $this->dataOcorrencia;
	}
	function set_dataDisponibilizacao($dataDisponibilizacao) {
		$this->dataDisponibilizacao = $dataDisponibilizacao;
	}
	function get_dataDisponibilizacao() {
		return $this->dataDisponibilizacao;
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
	function set_situacao($situacao) {
		$this->situacao = $situacao;
	}
	function get_situacao() {
		return $this->situacao;
	}
	function set_informante($informante) {
		$this->informante = $informante;
	}
	function get_informante() {
		return $this->informante;
	}
	function set_informadoPeloConsulente($informadoPeloConsulente) {
		$this->informadoPeloConsulente = $informadoPeloConsulente;
	}
	function get_informadoPeloConsulente() {
		return $this->informadoPeloConsulente;
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
	function set_condicao($condicao) {
		$this->condicao = $condicao;
	}
	function get_condicao() {
		return $this->condicao;
	}
	function set_condicaoMunicipio($condicaoMunicipio) {
		$this->condicaoMunicipio = $condicaoMunicipio;
	}
	function get_condicaoMunicipio() {
		return $this->condicaoMunicipio;
	}
	function set_segmento($segmento) {
		$this->segmento = $segmento;
	}
	function get_segmento() {
		return $this->segmento;
	}
}
?>