<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			redirect('mahasiswa/index', 'refresh');
		} else {
			$this->load->helper(array('form'));
			$this->load->view('form_login');
		}
	}

	function cek_login()
	{
		if (
			$this->input->post('username', true) == "" && $this->input->post('password', true) == ""
		) {
			redirect('', 'refresh');
		}
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$this->M_login->cek_login($username, $password);
	}
}
