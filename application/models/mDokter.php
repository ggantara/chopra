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
            $hasil = $this->db->query("select * from antrian");
            return $hasil;
        }
    	public function get_data_checkuppasien(){
            $hasil = $this->db->query("select * from pasien join antrian");
            return $hasil;
        }

}
