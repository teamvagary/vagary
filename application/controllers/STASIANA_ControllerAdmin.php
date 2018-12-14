<?php

class STASIANA_ControllerAdmin extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('STASIANA_Model');
 
	}
 
	function index(){
		$data['laporan'] = $this->STASIANA_Model->laporan()->result();
		$this->load->view('STASIANA_HomeAdmin.php',$data);
	}

	function ubah_status(){
		$this->load->view('STASIANA_UbahStatus.php');
		
	}

	function buat_rekapitulasi(){
		$this->load->view('STASIANA_BuatRekapitulasi.php');
		
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}



}