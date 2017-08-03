<?php
class Model_barang extends CI_Model{

	function list_barang(){
		$barang = $this->db->get('barang');
		return $barang;
	}
	function product($kode_barang){
		return $this->db->get_where('barang',array('kode_barang'=>$kode_barang));
	}
}
?>