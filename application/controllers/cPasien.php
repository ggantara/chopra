<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		 //  if($this->session->userdata('status_registrasi') == 0 || $this->session->userdata('status_registrasi')== ""){
		 // 	redirect('cLoginPasien');
		 // }
		$this->load->model("mPasien");
		$this->load->model("mAdmin");
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
	public function hal_profil_pasien(){
		$data = $this->session();
		$data['error'] = "";
		$data['pasien'] = $this->mPasien->get_data_pasien();
		$this->load->view('pasien_profile',$data);
	}

	public function hal_booking_pasien(){
		$data = $this->session();
		$data['error'] = "";
		$data['bookingpasien'] = $this->mPasien->get_data_bookingpasien();
		$data['schedule'] = $this->mAdmin->get_data_schedule();
		$this->load->view('pasien_bookinglogin',$data);
	}
	public function hal_antrian(){
		$data = $this->session();
		$data['error'] = "";
		$data['antrianpasien'] = $this->mPasien->get_data_antrianpasien();
		$this->load->view('pasien_queue',$data);
	}
 

	public function ubahKataSandi(){
    $id_pasien = $this->input->post('id_pasien');
    $password = $this->input->post('password');
    $oldpass = $this->input->post('oldpass');
    $newpass = $this->input->post('newpass');
    $repass = $this->input->post('repass');
    
    if(md5($oldpass) == $password){
      if($newpass == $repass){
        $this->mPasien->ubahSandi($id_pasien,$newpass);
        $this->session->set_flashdata('kataSandiBerhasil',true);
       $this->load->view('pasien_profile');
       //redirect('cPasien');
      }else{
        $this->session->set_flashdata('kataSandiTidakCocok',true);
        $this->load->view('pasien_profile');
        //redirect('cPasien');
      }
    }else{
      $this->session->set_flashdata('kataSandiGagal',true);
      $this->load->view('pasien_profile');
       //redirect('cPasien');
    }
  }

  public function hal_booking(){
		$data = $this->session();
		$data['error'] = "";
		$data['schedule'] = $this->mAdmin->get_data_schedule();
		$this->load->view('pasien_booking',$data);
	}



}
