<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leito extends CI_Controller {

	public function cadastrar()
	{

		$Dados['View'] 					= 'leito/cadastrar';
		$this->load->view('body/index', $Dados);
	}

	public function listar(){

		$this->load->model('LeitoMod');
		$Leitos 					= $this->LeitoMod->Listar();
		$Dados['Leitos'] 			= $Leitos;

		$Dados['View'] 					= 'leito/listar';
		$this->load->view('body/index', $Dados);
	}

	public function salvarCadastro(){

		$QuartoId	   = $this->input->post("QuartoId");

		$Identificacao = $this->input->post("Identificacao");


		$this->load->model("LeitoMod");
		$this->LeitoMod->QuartoId		= $QuartoId;
		$this->LeitoMod->Identificacao	= $Identificacao;
		$this->LeitoMod->setLeito();
	}
}