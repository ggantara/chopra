<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class mLoginPasien extends CI_Model {

		function __construct(){
        	parent::__construct();
    	}

    	function cek_login($username, $password){
		$query = $this->db->query("select * from pasien where username='$username' and password=md5('$password')");
		return $query;
	}
	public function cekLogin(){
      	if($this->session->userdata('login'))
        return true;

        return false;
    }

		// public function login($username,$password){
		// 	$hasil = $this->db->query("select * from pasien where username='$username' and password=md5('$password')");
		// 	return $hasil;
		// }

		// public function selectByEmail($email){
		// 	$hasil = $this->db->query("select * from peminjam where email='$email'");
		// 	return $hasil;
		// }

		// public function random_katasandi($length=8) {
		//     $chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ123456789";
		//     $kata_sandi = substr( str_shuffle( $chars ), 0, $length );
		//     return $kata_sandi;
		// }
	}
