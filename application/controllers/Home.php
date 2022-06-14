<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('verifica_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	function verifyUser(){
		$login = $this->input->post('login');
		$pswd = $this->input->post('pswd');
		
		$dados = array(
			'login'=>$login,
			'pswd'=>$pswd
		);
		$result = $this->verifica_model->verify($dados);
		if($result == NULL){
			$msg = array('msg'=>'1');
			$this->load->view('login',$msg);
		}else{
			$this->load->template('admin/dashboard');
		}
	}



}
