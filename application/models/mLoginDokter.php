<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class mLoginDokter extends CI_Model {

		function __construct(){
        	parent::__construct();
    	}


    function cek_login($username, $password){
		$query = $this->db->query("select * from dokter where username='$username' and password=md5('$password')");
		return $query;
	}
	public function cekLogin(){
      	if($this->session->userdata('login'))
        return true;

        return false;
    }

		
	}
