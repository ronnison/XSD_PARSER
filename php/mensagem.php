<?php
public class mensagem {
	private $codigo_erro;
	private $mensagem_erro;

	// Methods Construtor and Destrutor
	function __construct ($codigo_erro, $mensagem_erro){
		$this->codigo_erro = $codigo_erro;
		$this->mensagem_erro = $mensagem_erro;
	}
	// Methods Getter and Setter
	function set_codigo_erro($codigo_erro) {
		$this->codigo_erro = $codigo_erro;
	}
	function get_codigo_erro() {
		return $this->codigo_erro;
	}
	function set_mensagem_erro($mensagem_erro) {
		$this->mensagem_erro = $mensagem_erro;
	}
	function get_mensagem_erro() {
		return $this->mensagem_erro;
	}
}
?>