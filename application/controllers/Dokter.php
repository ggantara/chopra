<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        
    }
  public function index()
  {
    //$this->load->view('dokter_Login');
  	//$this->load->view('dokter_profile');
  	//$this->load->view('dokter_antrianpasien');
  	$this->load->view('dokter_periksa');
  }
}