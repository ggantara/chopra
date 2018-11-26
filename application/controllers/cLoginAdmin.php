<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLoginAdmin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("mLoginAdmin");

	}

	public function index()
	{
		
		if($this->mLoginAdmin->cekLogin()){
	    	redirect('cAdmin');
	    }
		$this->load->view('admin_Login');
	}
	public function logout(){
		$array_data = array('username', 'login');
		$this->session->unset_userdata($array_data);
		redirect('cLoginAdmin');
	}

	public function verify()
	{
		if($this->mLoginAdmin->cekLogin()){ //cek login
    		redirect('cAdmin');
    	}
		//ambil data dari form login
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// cek ke database 
		$cek = $this->mLoginAdmin->cek_login($username,$password);

		if ($cek->num_rows()>0){
			//buat sesi baru
			$data_session = array (
				'username' => $username,
				'login' => true
			);
			$this->session->set_userdata($data_session);
			
			redirect('cAdmin');
		}
		
		//jika tidak ditemukan 
		else{
			$this->session->set_flashdata('error', 'Username or password is wrong!');
			redirect('cLoginAdmin');
		}
	}




	// public function cek_login(){
	// 	$username = $this->input->post("username");
	// 	$password = $this->input->post("password");
	// 	$hasil = $this->mLoginAdmin->login($username,$password);
	// 	if($hasil->num_rows() != null){
	// 		foreach ($hasil->result() as $sess) {
	// 			$sess_data['id_admin'] = $sess->id_admin;
	// 			$sess_data['username'] = $sess->username;
	// 			$sess_data['password'] = $sess->password;
				
	// 			$this->session->set_userdata($sess_data);
	// 		}
	// 		redirect('cAdmin','refresh');
	// 	}else{
	// 		$this->session->set_flashdata('GagalLogin',true);
	// 		$data['username'] = $username;
	// 		$this->load->view('admin_Login',$data);
	// 	}
	// }

	

	// public function logout(){
		
	// 	session_destroy();
	// 	redirect('cLoginAdmin','refresh');
	// }
}
