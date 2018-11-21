<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAdmin extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		$this->load->model("mAdmin");
	}

	public function session(){
		$data['id_admin'] = $this->session->userdata('id_admin');
		$data['username'] =$this->session->userdata('username');
		$data['password'] =$this->session->userdata('password');
		
		return $data;
	}

	public function index()
	{
		$data = $this->session();
		$data['pasien'] = $this->mAdmin->countPasien();
		$data['pasientunggu'] = $this->mAdmin->countPasienTunggu();
		$data['dokter'] = $this->mAdmin->countDokter();
		$data['apoteker'] = $this->mAdmin->countApoteker();
		$this->load->view("admin_Dashboard",$data);
	}

	public function registrasiHakAkses(){
		$id_pasien = $this->uri->segment(3);
		$this->mAdmin->registrasi($id_pasien);
		$this->session->set_flashdata('suksesHakAkses',true);
		redirect('cAdmin/hal_data_pasien','refresh');
	}
	
	public function hal_profil_admin(){
		$data = $this->session();
		$data['error'] = "";
		$data['admin'] = $this->mAdmin->get_data_admin();
		$this->load->view('admin_Dashboard',$data);
	}

	public function hal_data_pasien(){
		$data = $this->session();
		$data['pasien'] = $this->mAdmin->get_data_pasien();
		
		$this->load->view('admin_pasien',$data);
	}
	public function hal_data_dokter(){
		$data = $this->session();
		$data['dokter'] = $this->mAdmin->get_data_dokter();
		
		$this->load->view('admin_dokter',$data);
	}
	public function hal_data_apoteker(){
		$data = $this->session();
		$data['apoteker'] = $this->mAdmin->get_data_apoteker();
		
		$this->load->view('admin_apoteker',$data);
	}
	public function hal_data_transaksipasien(){
		$data = $this->session();
		//$data['pasien'] = $this->mAdmin->get_data_pasien();
		
		$this->load->view('admin_pasientransaction',$data);
	}
	public function hal_data_schedule(){
		$data = $this->session();
		//$data['pasien'] = $this->mAdmin->get_data_pasien();
		
		$this->load->view('admin_schedule',$data);
	}



}
