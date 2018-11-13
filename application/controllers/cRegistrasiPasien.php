<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRegistrasiPasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("mPasien");
		$this->load->helper(array('form', 'url'));

	}

	public function index()
	{
		$data['id_pasien'] = null;
		$data['nama_pasien'] = null;
		$data['tgl_lahir'] = null;
		$data['jk'] = null;
		$data['nama_ibu'] = null;
		$data['no_hp'] = null;
		$data['email'] = null;
		$data['alamat'] = null;
		$data['username'] = null;
		
		$this->load->view("pasien_Registrasi",$data);
	}


	public function registrasi(){
		$id_pasien = $this->input->post('id_pasien');
		$nama_pasien = $this->input->post('nama_pasien');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jk = $this->input->post('jk');
		$nama_ibu = $this->input->post('nama_ibu');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		//$this->upload->initialize($config);
 
		// if ( ! $this->upload->do_upload('kk')){
		// 	$error = array('error' => $this->upload->display_errors());
		// 	$this->load->view('pasien_Registrasi', $error);
		// }else{
		// 	$data = array('upload_data' => $this->upload->data());
		// 	$scan = base_url()."scan/kk/". $this->upload->data()['file_name'];
		// }
	

		$cekid_pasien = $this->mPasien->cekid_pasien($id_pasien);
		$ceknama_pasien = $this->mPasien->cekNamaPenggunaPasien($username);
		if($cekid_pasien->num_rows() == null){
			if($ceknama_pasien->num_rows() == null){
				// $this->mPasien->registrasi($id_pasien,$nama_pasien,$tgl_lahir,$jk,$nama_ibu,$no_hp,$email,$alamat,$username,$password,$kk);
				$user_data = array(
				'id_pasien' => $id_pasien,
				'nama_pasien' => $nama_pasien,
				'tgl_lahir' => $tgl_lahir,
				'jk' => $jk,
				'nama_ibu' => $nama_ibu,
				'no_hp' => $no_hp,
				'email' => $email,
				'alamat' => $alamat,
				'username' => $username,
				'password' => $password,
				// 'kk' => $kk
			);
				$this->mPasien->registrasi($user_data);

				$this->session->set_flashdata('suksesregistrasi',true);
				$data['id_pasien'] = null;
				$data['nama_pasien'] = null;
				$data['tgl_lahir'] = null;
				$data['jk'] = null;
				$data['nama_ibu'] = null;
				$data['no_hp'] = null;
				$data['email'] = null;
				$data['alamat'] = null;
				$data['username'] = null;
				$this->load->view('pasien_Registrasi', $data);
			}else{
				$this->session->set_flashdata('GagalRegistrasiNamaAda',true);
				$data['id_pasien'] = $id_pasien;
				$data['nama_pasien'] = $nama_pasien;
				$data['tgl_lahir'] = $tgl_lahir;
				$data['jk'] = $jk;
				$data['nama_ibu'] = $nama_ibu;
				$data['no_hp'] = $no_hp;
				$data['email'] = $email;;
				$data['alamat'] = $alamat;
				$data['username'] = null;
				$this->load->view('pasien_Registrasi', $data);
			}
		}else{
			$this->session->set_flashdata('GagalRegistrasiIdAda',true);
				$data['id_pasien'] = null;
				$data['nama_pasien'] = $nama_pasien;
				$data['tgl_lahir'] = $tgl_lahir;
				$data['jk'] = $jk;
				$data['nama_ibu'] = $nama_ibu;
				$data['no_hp'] = $no_hp;
				$data['email'] = $email;;
				$data['alamat'] = $alamat;
				$data['username'] = $username;
			$this->load->view('pasien_Registrasi', $data);
		}
	}
}
