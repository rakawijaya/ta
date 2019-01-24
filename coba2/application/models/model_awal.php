<?php  
	//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_awal extends CI_Model{

	public function load_kec(){
		$sql = $this->db->query("SELECT * FROM isi");
		return $sql->result_array();
	}
public function load_norm(){
		$sql = $this->db->query("SELECT * FROM normalisasi");
		return $sql->result_array();
	}
public function load_normw(){
		$sql = $this->db->query("SELECT * FROM nw");
		return $sql->result_array();
	}
public function load_ap(){
		$sql = $this->db->query("SELECT * FROM ap");
		return $sql->result_array();
	}
public function load_am(){
		$sql = $this->db->query("SELECT * FROM am");
		return $sql->result_array();
	}

	public function load_d(){
		$sql = $this->db->query("SELECT * FROM d");
		return $sql->result_array();
	}
	public function load_h(){
		$sql = $this->db->query("SELECT * FROM hasil order by hasil desc");
		return $sql->result_array();
	}

	public function load_user(){
		$sql = $this->db->query("SELECT * FROM user");
		return $sql->result_array();
	}

	public function insert($data){
		$insert = $this->db->insert('user',$data);
		if($insert){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	public function editu($data,$id){
		$this->db->where('username',$id);
        $this->db->update('user', $data);
        return TRUE;
	}

	public function deleteu($username){
		$sql = $this->db->query("DELETE FROM user WHERE username = '$username' ");
		return $sql;
	}

	public function edit($data,$id){
		$this->db->where('nama',$id);
        $this->db->update('isi', $data);
        return TRUE;
	}
}	
?>