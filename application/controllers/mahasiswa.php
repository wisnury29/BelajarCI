<?php
	
	class mahasiswa extends CI_controller{

		function index (){
			$this->load->model('model_mahasiswa');
			$judul ="Daftar Mahasiswa";
			$data['judul'] = $judul;
			$data['tbmhs'] = $this->model_mahasiswa->list_mahasiswa()->result();
			$this->load->view('list_mahasiswa',$data);
		}

		function input(){
		        $this->load->view('input_mahasiswa');
		}
		    
		function input_simpan(){
		    $datamhs = array(
		     'NIM'   =>  $this->input->post('NIM'),
		     'nama'   =>  $this->input->post('nama'),
		     'jurusan'   =>  $this->input->post('jurusan'),
		     'angkatan'   =>  $this->input->post('angkatan'),
		     'hp'   =>  $this->input->post('hp'),
		     'email'   =>  $this->input->post('email'),
		     'alamatrumah'   =>  $this->input->post('alamatrumah'),
		     'statusadmin'   =>  $this->input->post('statusadmin'),
		     'keterangan'         =>  $this->input->post('keterangan'));
		        $this->db->insert('tbmhs',$datamhs);
		        redirect('mahasiswa');   
		}
	}
?>