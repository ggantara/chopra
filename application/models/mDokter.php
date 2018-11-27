<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class MDokter extends CI_Model {

		function __construct(){
        	parent::__construct();
    	}

    	

		public function get_data_dokter(){
    		$hasil = $this->db->query("select * from dokter");
    		return $hasil;
    	}

        public function get_data_antrianpasien(){
            $this->db->join('pasien', 'id_pasien = pasien.id_pasien', 'left');
            $hasil = $this->db->query("select * from pasien");
            return $hasil->result_array();
        }
        public function get_data_checkuppasien(){
        //     $ambil=$this->db->get('news');
        // return $ambil->result_array();
            $hasil = $this->db->query("select * from pasien join antrian");
            return $hasil;
        }
        public function ubahSandi($id_dokter,$newpass){
      $this->db->query("update dokter set password=md5('$newpass') where id_dokter='$id_dokter'");
    }

}
