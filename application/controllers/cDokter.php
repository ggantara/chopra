<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CDokter extends CI_Controller {
  function __construct(){
    parent::__construct();
    
    $this->load->model("mDokter");
  }

  public function session(){
    $data['id_dokter'] = $this->session->userdata('id_dokter');
    $data['nama_dokter'] = $this->session->userdata('nama_dokter');
    $data['nip'] = $this->session->userdata('nip');
    $data['tgl_lahir'] = $this->session->userdata('tgl_lahir');
    $data['no_hp'] = $this->session->userdata('no_hp');
    $data['email'] = $this->session->userdata('email');
    $data['alamat'] = $this->session->userdata('alamat');
    $data['gender'] =$this->session->userdata('gender');
    $data['username'] =$this->session->userdata('username');
    $data['password'] =$this->session->userdata('password');
    
    return $data;
  }

  public function index()
  {
    $data = $this->session();
    $this->load->view("dokter_profile",$data);
  }

  
  public function hal_profil_dokter(){
    $data = $this->session();
    $data['error'] = "";
    $data['dokter'] = $this->mDokter->get_data_dokter();
    $this->load->view('dokter_profile',$data);
  }

  public function hal_data_antrianpasien(){
    $data = $this->session();
    $data['antrianpasien'] = $this->mDokter->get_data_antrianpasien();
    
    $this->load->view('dokter_antrianpasien',$data);
  }
  public function hal_data_checkuppasien(){
    $data = $this->session();
    $data['checkuppasien'] = $this->mDokter->get_data_checkuppasien();
    
    $this->load->view('dokter_periksa',$data);
  }

  



}
