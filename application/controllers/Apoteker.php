<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apoteker extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        
    }
  public function index()
  {
   // $this->load->view('apoteker_Login');
    //$this->load->view('apoteker_profile');
   // $this->load->view('apoteker_obat');
  	$this->load->view('apoteker_transaksipasien');
  }
}