<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        
    }
  public function index()
  {
    //$this->load->view('admin_Login');
    //$this->load->view('admin_Dashboard');
    //$this->load->view('admin_dokter');
    //$this->load->view('admin_apoteker');
  //$this->load->view('admin_pasienregistration');
     // $this->load->view('admin_pasien');
    $this->load->view('admin_pasientransaction');
    //$this->load->view('add_schedule');
     //$this->load->view('admin_booking');
  }
}