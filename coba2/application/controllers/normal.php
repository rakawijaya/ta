<?php

class normal extends CI_Controller {

	
	public function index(){
			$this->load->model("model_awal");
			$data['list_norm'] = $this->model_awal->load_norm();

			$this->load->view("sidebar");

			$this->load->view("nav");
			$this->load->view("norm",$data);
			$this->load->view("foot");
		}
}
?>
