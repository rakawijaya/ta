<?php

class a extends CI_Controller {

	
	public function index(){
			$this->load->model("model_awal");
			$data1['list_m'] = $this->model_awal->load_am();
			
			$data['list_p'] = $this->model_awal->load_ap();
			$d['list_d'] = $this->model_awal->load_d();

			$this->load->view("sidebar");
			$this->load->view("nav");
			$this->load->view("a",$data);
			$this->load->view("a-",$data1);
			$this->load->view("d",$d);
			$this->load->view("foot");
		}
}
?>
