<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLoginApoteker extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("mLoginApoteker");

	}

	public function index()
	{
		
		if($this->mLoginApoteker->cekLogin()){
	    	redirect('cApoteker');
	    }
		$this->load->view('apoteker_Login');
	}
	public function logout(){
		$array_data = array('username', 'login');
		$this->session->unset_userdata($array_data);
		redirect('cLoginApoteker');
	}

	public function verify()
	{
		if($this->mLoginApoteker->cekLogin()){ //cek login
    		redirect('cApoteker');
    	}
		//ambil data dari form login
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// cek ke database 
		$cek = $this->mLoginApoteker->cek_login($username,$password);

		if ($cek->num_rows()>0){
			//buat sesi baru
			$data_session = array (
				'username' => $username,
				'login' => true
			);
			$this->session->set_userdata($data_session);
			
			redirect('cApoteker');
		}
		
		//jika tidak ditemukan 
		else{
			$this->session->set_flashdata('error', 'Username or password is wrong!');
			redirect('cLoginApoteker');
		}
	}




	
}
