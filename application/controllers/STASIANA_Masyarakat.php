<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		if(!$this->session->userdata('level')){
			redirect('login');
		}else{
			$this->load->view('v_user');
		}
		
	}
}
