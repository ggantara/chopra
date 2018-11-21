<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CApoteker extends CI_Controller {
  function __construct(){
    parent::__construct();
    
    $this->load->model("mApoteker");
  }

  public function session(){
    $data['id_apoteker'] = $this->session->userdata('id_apoteker');
    $data['nama_apoteker'] = $this->session->userdata('nama_apoteker');
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
    $this->load->view("apoteker_profile",$data);
  }

  
  public function hal_profil_apoteker(){
    $data = $this->session();
    $data['error'] = "";
    $data['apoteker'] = $this->mApoteker->get_data_apoteker();
    $this->load->view('apoteker_profile',$data);
  }

  public function hal_data_obat(){
    $data = $this->session();
    $data['obat'] = $this->mApoteker->get_data_obat();
    
    $this->load->view('apoteker_obat',$data);
  }
  public function hal_data_transaksipasien(){
    $data = $this->session();
    $data['transaksipasien'] = $this->mApoteker->get_data_transaksipasien();
    
    $this->load->view('apoteker_transaksipasien',$data);
  }

  



}
