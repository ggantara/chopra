<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class mPasien extends CI_Model {

		function __construct(){
        	parent::__construct();
    	}

    	public function get_data_pasien(){
			$hasil = $this->db->query("select * from pasien");
			return $hasil;
		}

		public function cekid_pasien($id_pasien){
			$hasil = $this->db->query("select * from pasien where id_pasien='$id_pasien'");
			return $hasil;
		}

		public function cekNamaPenggunaPasien($username){
			$hasil = $this->db->query("select * from pasien where username='$username'");
			return $hasil;
	}
	// public function registrasi($id_pasien,$nama_pasien,$tgl_lahir,$jk,$nama_ibu,$no_hp,$email,$alamat,$username,$password,$kk){
	// 		$this->db->query("insert into pasien values('$id_pasien','$nama_pasien','$tgl_lahir','$jk','$nama_ibu','$no_hp','$email','$alamat','$username',md5('$kata_sandi'),'$kk')");
	// 	}

	public function registrasi($data){ // array of data
      extract($data) ; // extract array $data. i.e. $data['nama'] ==> $nama
      $this->db->query("insert into pasien(id_pasien,nama_pasien,tgl_lahir,jk,nama_ibu,no_hp,email,alamat,username,password) 
        values('$id_pasien','$nama_pasien','$tgl_lahir','$jk','$nama_ibu','$no_hp','$email','$alamat','$username',md5('$password'))");
    }

}
