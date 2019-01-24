<?php

class air extends CI_Controller {

	
	public function index(){
			$this->load->model("model_awal");
			$data['list_kec'] = $this->model_awal->load_kec();

			$this->load->view("sidebar");

			$this->load->view("nav");
			$this->load->view("cat",$data);
			$this->load->view("foot");
		}

	public function edit(){
		$this->load->model("model_awal");
		if(isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$userData = array(
				'cat' => $this->input->post('cat'),
				
			);
		}
		

		$editUserData = $this->model_awal->edit($userData,$nama);

		if($userData){
			$this->session->set_flashdata('success_msg','Berhasil');
			redirect('air');
		}
		else{
			$this->session->set_flashdata('error_msg','gagal');
		}
	}
}
?>
