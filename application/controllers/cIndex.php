<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CIndex extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->data= ""){
			redirect('cLoginPasien');
		}
		$this->load->model("mPasien");
	}

	public function index()
	{
		$this->load->view("user_LandingPage");
	}

	public function session(){
		$data['id_pasien'] = $this->session->userdata('id_admin');
		$data['nama_pasien'] = $this->session->userdata('nama_pasien');
		$data['tgl_lahir']=$this->session->userdata('tgl_lahir');
		$data['jk']=$this->session->userdata('jk');
		$data['nama_ibu'] =$this->session->userdata('nama_ibu');
		$data['no_hp'] =$this->session->userdata('no_hp');
		$data['email'] =$this->session->userdata('email');
		$data['alamat'] =$this->session->userdata('alamat');
		$data['username'] =$this->session->userdata('username');
		$data['password'] =$this->session->userdata('password');
		$data['no_kk'] =$this->session->userdata('no_kk');
		
		return $data;
	}

	
}