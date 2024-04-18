<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('vw_register');
	}

	public function proses()
	{
		$this->form_validation->set_rules('username', 'username','trim|required');
		$this->form_validation->set_rules('fulname', 'Fulname','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'Password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('email', 'Email','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$fulname = $this->input->post('fulname');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$this->auth->register($username,$password,$fulname,$email);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}
 