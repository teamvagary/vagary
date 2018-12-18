<?php

class STASIANA_ControllerAdmin extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('STASIANA_Model');

 
	}
 
	function index(){
		if(!$this->session->userdata('level')){
			redirect('STASIANA_Login');
		}else{
			$data['laporan'] = $this->STASIANA_Model->tampil()->result();
			$this->load->view('STASIANA_HomeAdmin.php',$data);
		}
		
	}

	function Edit($id_laporan){
		$where = array('id_laporan' => $id_laporan);
	    $data['laporan'] = $this->STASIANA_Model->edit_data($where,'laporan')->result();
	    $this->load->view('STASIANA_EditForm',$data);
	}

	function update(){
	  	$id_laporan = $this->input->post('id_laporan');
		$jenis_bencana = $this->input->post('jenis_bencana');
	    $tanggal = $this->input->post('tanggal');
	    $provinces_name = $this->input->post('provinces_name');
	    $regencies_name = $this->input->post('regencies_name');
	    $kecamatan = $this->input->post('kecamatan');
	    $alamat_lengkap = $this->input->post('alamat_lengkap');
	    $deskripsi_bencana = $this->input->post('deskripsi_bencana');
	    $image = $this->input->post('image');
	    $status_bencana = $this->input->post('status_bencana');

	  $data = array(
	      'jenis_bencana' => $jenis_bencana,
	      'tanggal' => $tanggal,
	      'provinces_name' => $provinces_name,
	      'regencies_name' => $regencies_name,
	      'kecamatan' => $kecamatan,
	      'alamat_lengkap' => $alamat_lengkap,
	      'deskripsi_bencana' => $deskripsi_bencana,
	      'image' => $image,
	      'status_bencana' => $status_bencana
	      
	       );

	  $where = array(
	    'id_laporan' => $id_laporan
	  );
	 
	  $this->STASIANA_Model->update_data($where,$data,'buku');
	  redirect('STASIANA_ControllerAdmin/index');
	}

	function rekapitulasi(){
		$x['rekap']=$this->STASIANA_Model->get_data_kejadian();
		$this->load->view('STASIANA_Rekapitulasi.php',$x);
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}



}
