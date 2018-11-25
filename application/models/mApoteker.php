<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class mApoteker extends CI_Model {

		function __construct(){
        	parent::__construct();
    	}

		public function get_data_apoteker(){
    		$hasil = $this->db->query("select * from apoteker");
    		return $hasil;
    	}
    	public function get_data_obat(){
    		$hasil = $this->db->query("select * from obat");
    		return $hasil;
    	}
    	public function get_data_transaksipasien(){
    		$hasil = $this->db->query("select * from transaksi");
    		return $hasil;
    	}
        public function ubahSandi($id_apoteker,$newpass){
        $this->db->query("update apoteker set password=md5('$newpass') where id_apoteker='$id_apoteker'");
    }

        

}
