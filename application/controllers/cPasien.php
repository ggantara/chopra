<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status_registrasi') == 0 || $this->session->userdata('status_registrasi')== ""){
			redirect('cLoginPasien');
		}
		$this->load->model("mPasien");
	}

	public function session(){
		$data['id_pasien'] = $this->session->userdata('id_pasien');
		$data['nama_pasien'] = $this->session->userdata('nama_pasien');
		$data['tgl_lahir']=$this->session->userdata('tgl_lahir');
		$data['jk']=$this->session->userdata('jk');
		$data['nama_ibu']=$this->session->userdata('nama_ibu');
		$data['no_hp'] =$this->session->userdata('no_hp');
		$data['email'] =$this->session->userdata('email');
		$data['alamat'] =$this->session->userdata('alamat');
		$data['username'] =$this->session->userdata('username');
		$data['password'] =$this->session->userdata('password');
		$data['status_registrasi']=$this->session->userdata('status_registrasi');
		return $data;
	}

	public function index()
	{
		$data = $this->session();
		$this->load->view("pasien_profile",$data);
	}
	
//ambil data profil
	public function hal_profil_peminjam(){
		$data = $this->session();
		$data['error'] = "";
		$data['peminjam'] = $this->mPeminjam->get_data_peminjam();
		$this->load->view('Peminjam/vPeminjam',$data);
	}



}
