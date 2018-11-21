<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLoginDokter extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("mLoginDokter");

	}

	public function index()
	{
		
		if($this->mLoginDokter->cekLogin()){
	    	redirect('cDokter');
	    }
		$this->load->view('dokter_Login');
	}
	public function logout(){
		$array_data = array('username', 'login');
		$this->session->unset_userdata($array_data);
		redirect('cLoginDokter');
	}

	public function verify()
	{
		if($this->mLoginDokter->cekLogin()){ //cek login
    		redirect('cDokter');
    	}
		//ambil data dari form login
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// cek ke database 
		$cek = $this->mLoginDokter->cek_login($username,$password);

		if ($cek->num_rows()>0){
			//buat sesi baru
			$data_session = array (
				'username' => $username,
				'login' => true
			);
			$this->session->set_userdata($data_session);
			
			redirect('cDokter');
		}
		
		//jika tidak ditemukan 
		else{
			$this->session->set_flashdata('error', 'Username or password is wrong!');
			redirect('cLoginDokter');
		}
	}




	
}
