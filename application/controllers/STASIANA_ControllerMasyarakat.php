<?php

class STASIANA_ControllerMasyarakat extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('STASIANA_Model');
 
	}
 
	function index(){
		$data['laporan'] = $this->STASIANA_Model->laporan()->result();
		$this->load->view('STASIANA_HomeMasyarakat.php', $data);
	}


	function laporkan(){
		$this->load->view('STASIANA_FormLaporan.php');
	}

	function laporan(){
		$id_laporan = $this->input->post('id_laporan');
		$jenis_bencana = $this->input->post('jenis_bencana');
	    $alamat_lengkap = $this->input->post('alamat_lengkap');
	    $deskripsi_bencana = $this->input->post('deskripsi_bencana');
		$data['laporan'] = $this->STASIANA_Model->laporan(array(
	 		'id_laporan' => $id_laporan,
			'jenis_bencana' => $jenis_bencana,
			'alamat_lengkap' => $alamat_lengkap,
			'deskripsi_bencana' => $deskripsi_bencana)
		)->result();
		$this->load->view('STASIANA_HomeAdmin.php',$data);
	}

	function upload_gambar(){
		 $data = array();
	    
	    if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
	      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
	      $upload = $this->STASIANA_Model->upload();
	      
	      if($upload['result'] == "success"){ // Jika proses upload sukses
	         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
	    	$this->load->view('STASIANA_ControllerMasyarakat/index');
	      }else{ // Jika proses upload gagal
	        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
	      }
	    }
	}
	    
	  

	function melaporkan(){

		$id_laporan = $this->input->post('id_laporan');
		$jenis_bencana = $this->input->post('jenis_bencana');
	    $tanggal = $this->input->post('tanggal');
	    $provinces_name = $this->input->post('provinces_name');
	    $regencies_name = $this->input->post('regencies_name');
	    $kecamatan = $this->input->post('kecamatan');
	    $alamat_lengkap = $this->input->post('alamat_lengkap');
	    $deskripsi_bencana = $this->input->post('deskripsi_bencana');
	    $image = $this->input->post('image');

	      $data = array(
	      'id_laporan' => $id_laporan,
	      'jenis_bencana' => $jenis_bencana,
	      'tanggal' => $tanggal,
	      'provinces_name' => $provinces_name,
	      'regencies_name' => $regencies_name,
	      'kecamatan' => $kecamatan,
	      'alamat_lengkap' => $alamat_lengkap,
	      'deskripsi_bencana' => $deskripsi_bencana,
	      'image' => $image
	       );


    $this->STASIANA_Model->laporkan($data,'laporan');

    redirect('STASIANA_ControllerMasyarakat/index');

	}


	function status(){
		$this->load->view('STASIANA_Status.php');
		
	}

	function rekapitulasi(){
		$this->load->view('STASIANA_Rekapitulasi.php');
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}



}