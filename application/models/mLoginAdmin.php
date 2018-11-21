<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class mLoginAdmin extends CI_Model {

		function __construct(){
        	parent::__construct();
    	}

		// public function login($username,$password){
		// 	$hasil = $this->db->query("select * from admin where username='$username' and password=md5('$password')");
		// 	return $hasil;
		// }

    function cek_login($username, $password){
		$query = $this->db->query("select * from admin where username='$username' and password=md5('$password')");
		return $query;
	}
	public function cekLogin(){
      	if($this->session->userdata('login'))
        return true;

        return false;
    }

		
	}
