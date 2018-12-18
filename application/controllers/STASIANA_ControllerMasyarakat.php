<?php

class STASIANA_ControllerMasyarakat extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('STASIANA_Model');
		
 
	}
 
	function index(){
		if(!$this->session->userdata('level')){
			redirect('STASIANA_Login');
		}else{
			$data['laporan'] = $this->STASIANA_Model->tampil()->result();
			$this->load->view('STASIANA_HomeMasyarakat.php', $data);
		}
		
	}
	function kontak(){
		$this->load->view('STASIANA_Kontak');
	}


	function laporkan(){
		$data['provinces'] = $this->STASIANA_Model->fetch_prov();
		$this->load->view('STASIANA_FormLaporan.php', $data);
	}

	function fetch_kota(){
	  if($this->input->post('province_id')){
	   echo $this->STASIANA_Model->fetch_prov($this->input->post('province_id'));
	  }
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
			        $this->STASIANA_Model->save($upload);
			        
			        redirect('STASIANA_ControllerMasyarakat'); // Redirect kembali ke halaman awal / halaman view data
			      }else{ // Jika proses upload gagal
			        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			      }
		    }
		    
		    $this->load->view('STASIANA_ControllerMasyarakat', $data);
	} 

	public function paginaton() {
        $this->load->model('STASIANA_Model');
 
       $config = array();
 
       $config["base_url"] = base_url() . "STASIANA_ControllerMasyarakat/departmentdata";
 
       $config["total_rows"] =  $this->STASIANA_Model->record_count();
 
       $config["per_page"] = 6;
 
       $config["uri_segment"] = 3;
 
       $this->pagination->initialize($config);
 
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
       $data["results"] = $this->STASIANA_Model->
 
           fetch_departments($config["per_page"], $page);
 
       $data["links"] = $this->pagination->create_links();
 
       $this->load->view("STASIANA_HomeMasyarakat", $data);
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

    redirect('STASIANA_ControllerMasyarakat');

	}


	function status(){
		$this->load->view('STASIANA_Status.php');
		
	}

	function rekapitulasi(){
		$this->load->view('STASIANA_Rekapitulasi.php');
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('STASIANA_Login');
	}



}