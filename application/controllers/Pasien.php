<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        
    }
  public function index()
  {
   // $this->load->view('pasien_Login');
    // $this->load->view('pasien_Registration');
    //$this->load->view('pasien_booking');
    //$this->load->view('pasien_profile');
    //$this->load->view('pasien_bookinglogin');
    $this->load->view('pasien_queue');
  
  }
}