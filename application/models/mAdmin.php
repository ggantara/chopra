<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class MAdmin extends CI_Model {

		function __construct(){
        	parent::__construct();
    	}

    	public function registrasi($id_pasien){
			$this->db->query("update pasien set status_registrasi=true where id_pasien='$id_pasien'");
		}

		public function get_data_admin(){
    		$hasil = $this->db->query("select * from admin");
    		return $hasil;
    	}
    	public function get_data_pasien(){
			$hasil = $this->db->query("select * from pasien");
			return $hasil;
		}
		public function get_data_dokter(){
			$hasil = $this->db->query("select * from dokter");
			return $hasil;
		}
		public function get_data_apoteker(){
			$hasil = $this->db->query("select * from apoteker");
			return $hasil;
		}

		function countPasien(){
		$sql = "SELECT count(id_pasien) as total from pasien where status_registrasi=1" ;
		$result = $this->db->query($sql);
		return $result->row()->total;
		}
		function countPasienTunggu(){
		$sql = "SELECT count(id_pasien) as total from pasien where status_registrasi=0" ;
		$result = $this->db->query($sql);
		return $result->row()->total;
		}

		function countDokter(){
			$sql = "SELECT count(id_dokter) as total from dokter";
			$result = $this->db->query($sql);
			return $result->row()->total;
		}
		function countApoteker(){
			$sql = "SELECT count(id_apoteker) as total from apoteker";
			$result = $this->db->query($sql);
			return $result->row()->total;
		}

}
