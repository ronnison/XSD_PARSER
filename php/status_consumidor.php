<?php
public class status_consumidor {
	private $mensagem;

	// Methods Construtor and Destrutor
	function __construct ($mensagem){
		$this->mensagem = $mensagem;
	}
	// Methods Getter and Setter
	function set_mensagem($mensagem) {
		$this->mensagem = $mensagem;
	}
	function get_mensagem() {
		return $this->mensagem;
	}
}
?>