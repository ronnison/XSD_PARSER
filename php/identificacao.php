<?php
public class identificacao {
	private $tamanhoRegistro;
	private $tipoRegistro;
	private $registro;
	private $documento;
	private $nome;
	private $nomeMae;
	private $dataNascimento;
	private $numeroRG;
	private $orgaoEmissor;
	private $unidadeFedarativaRG;
	private $dataEmissaoRG;
	private $sexoConsultado;
	private $cidadeNascimento;
	private $estadoCivil;
	private $numeroDependentes;
	private $grauInstrucao;
	private $situacaoReceita;
	private $dataAtualizacao;
	private $regiaoCpf;
	private $tituloEleitor;
	private $obito;

	// Methods Construtor and Destrutor
	function __construct ($tamanhoRegistro, $tipoRegistro, $registro, $documento, $nome, $nomeMae, $dataNascimento, $numeroRG, $orgaoEmissor, $unidadeFedarativaRG, $dataEmissaoRG, $sexoConsultado, $cidadeNascimento, $estadoCivil, $numeroDependentes, $grauInstrucao, $situacaoReceita, $dataAtualizacao, $regiaoCpf, $tituloEleitor, $obito){
		$this->tamanhoRegistro = $tamanhoRegistro;
		$this->tipoRegistro = $tipoRegistro;
		$this->registro = $registro;
		$this->documento = $documento;
		$this->nome = $nome;
		$this->nomeMae = $nomeMae;
		$this->dataNascimento = $dataNascimento;
		$this->numeroRG = $numeroRG;
		$this->orgaoEmissor = $orgaoEmissor;
		$this->unidadeFedarativaRG = $unidadeFedarativaRG;
		$this->dataEmissaoRG = $dataEmissaoRG;
		$this->sexoConsultado = $sexoConsultado;
		$this->cidadeNascimento = $cidadeNascimento;
		$this->estadoCivil = $estadoCivil;
		$this->numeroDependentes = $numeroDependentes;
		$this->grauInstrucao = $grauInstrucao;
		$this->situacaoReceita = $situacaoReceita;
		$this->dataAtualizacao = $dataAtualizacao;
		$this->regiaoCpf = $regiaoCpf;
		$this->tituloEleitor = $tituloEleitor;
		$this->obito = $obito;
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
	function set_documento($documento) {
		$this->documento = $documento;
	}
	function get_documento() {
		return $this->documento;
	}
	function set_nome($nome) {
		$this->nome = $nome;
	}
	function get_nome() {
		return $this->nome;
	}
	function set_nomeMae($nomeMae) {
		$this->nomeMae = $nomeMae;
	}
	function get_nomeMae() {
		return $this->nomeMae;
	}
	function set_dataNascimento($dataNascimento) {
		$this->dataNascimento = $dataNascimento;
	}
	function get_dataNascimento() {
		return $this->dataNascimento;
	}
	function set_numeroRG($numeroRG) {
		$this->numeroRG = $numeroRG;
	}
	function get_numeroRG() {
		return $this->numeroRG;
	}
	function set_orgaoEmissor($orgaoEmissor) {
		$this->orgaoEmissor = $orgaoEmissor;
	}
	function get_orgaoEmissor() {
		return $this->orgaoEmissor;
	}
	function set_unidadeFedarativaRG($unidadeFedarativaRG) {
		$this->unidadeFedarativaRG = $unidadeFedarativaRG;
	}
	function get_unidadeFedarativaRG() {
		return $this->unidadeFedarativaRG;
	}
	function set_dataEmissaoRG($dataEmissaoRG) {
		$this->dataEmissaoRG = $dataEmissaoRG;
	}
	function get_dataEmissaoRG() {
		return $this->dataEmissaoRG;
	}
	function set_sexoConsultado($sexoConsultado) {
		$this->sexoConsultado = $sexoConsultado;
	}
	function get_sexoConsultado() {
		return $this->sexoConsultado;
	}
	function set_cidadeNascimento($cidadeNascimento) {
		$this->cidadeNascimento = $cidadeNascimento;
	}
	function get_cidadeNascimento() {
		return $this->cidadeNascimento;
	}
	function set_estadoCivil($estadoCivil) {
		$this->estadoCivil = $estadoCivil;
	}
	function get_estadoCivil() {
		return $this->estadoCivil;
	}
	function set_numeroDependentes($numeroDependentes) {
		$this->numeroDependentes = $numeroDependentes;
	}
	function get_numeroDependentes() {
		return $this->numeroDependentes;
	}
	function set_grauInstrucao($grauInstrucao) {
		$this->grauInstrucao = $grauInstrucao;
	}
	function get_grauInstrucao() {
		return $this->grauInstrucao;
	}
	function set_situacaoReceita($situacaoReceita) {
		$this->situacaoReceita = $situacaoReceita;
	}
	function get_situacaoReceita() {
		return $this->situacaoReceita;
	}
	function set_dataAtualizacao($dataAtualizacao) {
		$this->dataAtualizacao = $dataAtualizacao;
	}
	function get_dataAtualizacao() {
		return $this->dataAtualizacao;
	}
	function set_regiaoCpf($regiaoCpf) {
		$this->regiaoCpf = $regiaoCpf;
	}
	function get_regiaoCpf() {
		return $this->regiaoCpf;
	}
	function set_tituloEleitor($tituloEleitor) {
		$this->tituloEleitor = $tituloEleitor;
	}
	function get_tituloEleitor() {
		return $this->tituloEleitor;
	}
	function set_obito($obito) {
		$this->obito = $obito;
	}
	function get_obito() {
		return $this->obito;
	}
}
?>