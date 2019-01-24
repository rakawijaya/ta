<?php

class hasil extends CI_Controller {

	
	public function index(){
			$this->load->model("model_awal");
			$data['list_kec'] = $this->model_awal->load_h();

			$this->load->view("sidebar");

			$this->load->view("nav");
			$this->load->view("hasil",$data);
			$this->load->view("foot");
		}
}
?>
