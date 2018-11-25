<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLoginPasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("mLoginPasien");

	}

	public function index()
	{
		
		if($this->mLoginPasien->cekLogin()){
	    	redirect('cPasien');
	    }
		$this->load->view('user_Login');
	}
	public function logout(){
		$array_data = array('username', 'login');
		$this->session->unset_userdata($array_data);
		redirect('cLoginPasien');
	}

	public function verify()
	{
		if($this->mLoginPasien->cekLogin()){ //cek login
    		redirect('cPasien');
    	}
		//ambil data dari form login
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// cek ke database 
		$cek = $this->mLoginPasien->cek_login($username,$password);

		if ($cek->num_rows()>0){
			//buat sesi baru
			$data_session = array (
				'username' => $username,
				'login' => true
			);
			$this->session->set_userdata($data_session);
			
			redirect('cPasien');
		}
		
		//jika tidak ditemukan 
		else{
			$this->session->set_flashdata('error', 'Username or password is wrong!');
			redirect('cLoginPasien');
		}
	}




	
}
