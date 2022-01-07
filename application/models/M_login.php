<?php defined('BASEPATH') or exit('No direct script access allowed!');

class M_login extends CI_Model
{
	function cek_login($username, $password)
	{
		$query = $this->db->query("SELECT * FROM user WHERE username = '$username' and password = '$password'");
		if ($query->num_rows() > 0) {
			$sess_array = array();
			$row = $query->row();
			$sess_array = array('username' => $row->username, 'logged_in');
			$this->session->set_userdata($sess_array);
			$status = array('status' => true);
		}
		redirect('index.php/Mahasiswa/index');
	}
}
