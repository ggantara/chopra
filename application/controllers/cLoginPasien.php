<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLoginPasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("mLoginPasien");
	}

	public function index()
	{
		$data['username'] = null;
		$this->load->view("user_Login",$data);
	}

	public function cek_login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$hasil = $this->mLoginPasien->login($username,$password);
		if($hasil->num_rows() != null){
			foreach ($hasil->result() as $sess) {
				$sess_data['id_pasien'] = $sess->id_pasien;
				$sess_data['nama_pasien'] = $sess->nama_pasien;
				$sess_data['tgl_lahir'] = $sess->tgl_lahir;
				$sess_data['jk'] = $sess->jk;
				$sess_data['nama_ibu'] = $sess->nama_ibu;
				$sess_data['no_hp'] = $sess->no_hp;
				$sess_data['email'] = $sess->email;
				$sess_data['alamat'] = $sess->alamat;
				$sess_data['username'] = $sess->username;
				$sess_data['password'] = $sess->password;
				$sess_data['no_kk'] = $sess->no_kk;
				$sess_data['status_registrasi'] = $sess->status_registrasi;
				$this->session->set_userdata($sess_data);
			}
			if($this->session->userdata('status_registrasi') == 1){
				redirect('cPasien','refresh');
			}else if($this->session->userdata('status_registrasi') == 0){
				$this->session->set_flashdata('aksesGagal',true);
				redirect('cLoginPasien','refresh');
			}
		}else{
			$this->session->set_flashdata('GagalLogin',true);
			$data['username'] = $username;
			$this->load->view('pasien_Registrasi',$data);
		}
	}

	// public function lupaPassword(){
	// 	$this->load->library('email');
	// 	$email->$this->input->post('email');
	// 	if($this->mLoginAdmin->selectByEmail($email) == 1){
	// 		$kata_sandi = uniqid();
	// 		$email_to = $this->input->post('email');
	// 		$email_cc = $this->input->post('email');
	// 		$email_bcc = $this->input->post('email');
	// 		$email_subject = "Reset Kata Sandi";
	// 		$email_message = "Kata sandi terbaru Anda : ".$kata_sandi.".<br>Silahkan login kemudian segera ubah kata sandi Anda.<br>Terimakasih";

	// 		$this->email->initialize($config);
	// 		$this->email_>from('nadhia.riana@gmail.com','Admin');
	// 		$this->email->to($email_to);
	// 		if ($email_cc != null) $this->email->cc($email_cc);
	// 		if ($email_bcc != null) $this->email->bcc($email_bcc);
	// 		$this->email->subject($email_subject);
	// 		$this->email->message($email_message);
	// 		if($this->email->send()){
	// 			$data['kata_sandi'] = md5($kata_sandi);
	// 			$this->mLoginPeminjam->updatePassword($email,$data);
	// 		}
	// 	}
	// 	redirect(site_url()."/vLoginAdmin");
	// }

	public function logout(){
		//$this->session->unset_userdata('level');//////?????
		session_destroy();
		redirect('cLoginPasien','refresh');
	}
}
