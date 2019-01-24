<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$where = array(
			'username' => $username,
			'pass' => $pass,
			'as' == "admin"
			);
		$where1 = array(
			'username' => $username,
			'pass' => $pass,
			'as' == "manager"
			
			);
		$where2 = array(
			'username' => $username,
			'pass' => $pass,
			'as' = "user"
			
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		$cek1 = $this->m_login->cek_login("user",$where1)->num_rows();
		$cek1 = $this->m_login->cek_login("user",$where2)->num_rows();


		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}
		elseif{
			if($cek1 > 0){
				if (password_verify($pass,$pass)){}
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("user"));}
			else {
				echo "password salah !";

				 }

		}
		else{
			if($cek1 > 0){
				if (password_verify($pass,$pass)){}
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("user"));}
			else {
				echo "password salah !";

				 }

		}
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
