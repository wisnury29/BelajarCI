<?php
class Model_mahasiswa extends CI_Model{

	function list_mahasiswa(){
		$tbmhs = $this->db->get('tbmhs');
		return $tbmhs;
	}
	function product($NIM){
		return $this->db->get_where('tbmhs',array('NIM'=>$NIM));
	}
}
?>