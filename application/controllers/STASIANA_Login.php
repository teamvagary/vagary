<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class STASIANA_Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('STASIANA_ViewLogin');
	}

	function prosesLogin()
	{	
		$email_user = $this->input->post('email', true);
		$pass_user = $this->input->post('pass', true);
		$cek = $this->STASIANA_Model->ceklogin($email_user,$pass_user);
		$tes = count($cek);
		if ($tes > 0){
			$data_login = $this->STASIANA_Model->ceklogin($email_user,$pass_user);
			$level = $data_login->level;
			$data = array('level' => $level);
			$this->session->set_userdata($data);
			if($level == 'admin'){
				redirect ('STASIANA_ControllerAdmin');
			}elseif($level == 'user'){
				redirect('STASIANA_ControllerMasyarakat');
			}

		
		}else{
			echo 'gagal login';
		}

	}

	function signup(){
		$this->load->view("STASIANA_SignUp");
	}

	function masuk(){
		$nama_lengkap = $this->input->post('nama_lengkap');
	    $email = $this->input->post('email');
	    $password = $this->input->post('password');
	    $data = array(
	      'nama_lengkap' => $nama_lengkap,
	      'email' => $email,
	      'password' => md5($password)
	      );
	    $this->STASIANA_Model->input_data($data,'tb_user');

	    redirect('STASIANA_Login/index');
	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect('STASIANA_ViewLogin');
	}
}

