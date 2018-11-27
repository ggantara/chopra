<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAdmin extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		$this->load->model("mAdmin");
	}

	public function session(){
		$data['id_admin'] = $this->session->userdata('id_admin');
		$data['username'] =$this->session->userdata('username');
		$data['password'] =$this->session->userdata('password');
		
		return $data;
	}

	public function index()
	{
		$data = $this->session();
		$data['Cpasien'] = $this->mAdmin->countPasien();
		$data['Cpasientunggu'] = $this->mAdmin->countPasienTunggu();
		$data['Cdokter'] = $this->mAdmin->countDokter();
		//$data['dokter'] = $this->mAdmin->ambil_datadokter()->result();
		$data['Capoteker'] = $this->mAdmin->countApoteker();
		$this->load->view("admin_Dashboard",$data);
	}

	public function registrasiHakAkses(){
		$id_pasien = $this->uri->segment(3);
		$this->mAdmin->registrasi($id_pasien);
		$this->session->set_flashdata('suksesHakAkses',true);
		redirect('cAdmin/hal_data_pasien','refresh');
	}
	
	public function hal_profil_admin(){
		$data = $this->session();
		$data['error'] = "";
		$data['admin'] = $this->mAdmin->get_data_admin();
		$this->load->view('admin_Dashboard',$data);
	}

	public function hal_data_pasien(){
		$data = $this->session();
		$data['pasien'] = $this->mAdmin->get_data_pasien();
		
		$this->load->view('admin_pasien',$data);
	}
	public function hal_data_dokter(){
		$data = $this->session();
		$data['dokter'] = $this->mAdmin->get_data_dokter();
		
		$this->load->view('admin_dokter',$data);
	}
	public function hal_data_apoteker(){
		$data = $this->session();
		$data['apoteker'] = $this->mAdmin->get_data_apoteker();
		
		$this->load->view('admin_apoteker',$data);
	}
	public function hal_data_transaksipasien(){
		$data = $this->session();
		//$data['pasien'] = $this->mAdmin->get_data_pasien();
		
		$this->load->view('admin_pasientransaction',$data);
	}
	public function hal_data_schedule(){
		$data = $this->session();
		$data['schedule'] = $this->mAdmin->get_data_schedule();
		
		$this->load->view('admin_schedule',$data);
	}

	public function addApoteker(){
		$nip = $this->input->post('nip');
		$nama_apoteker = $this->input->post('nama_apoteker');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$gender = $this->input->post('gender');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$ceknip_apoteker = $this->db->query("select * from apoteker where nip='$nip'");
		if ($ceknip_apoteker->num_rows() == null) {
			$user_data = array(
				'nip' => $nip,
				'nama_apoteker' => $nama_apoteker,
				'tgl_lahir' => $tgl_lahir,
				'no_hp' => $no_hp,
				'email' => $email,
				'alamat' => $alamat,
				'gender' => $gender,
				'username' => $username,
				'password' => chopra,	
				
			);
			$this->mAdmin->tambahApoteker($user_data);
			
			$this->session->set_flashdata('suksestambah',true);
			$data['nip'] = null;
			$data['nama_apoteker'] = null;
			$data['tgl_lahir'] = null;
			$data['no_hp'] = null;
			$data['email'] = null;
			$data['alamat'] = null;
			$data['gender'] = null;
			$data['username'] = null;
			$data['password'] = null;
			
	
			redirect('cAdmin/hal_data_apoteker');
		}
		else{
			$this->session->flashdata('gagalregistrasi',true);
			$data['nip'] = null;
			$data['nama_apoteker'] = null;
			$data['tgl_lahir'] = null;
			$data['no_hp'] = null;
			$data['email'] = null;
			$data['alamat'] = null;
			$data['gender'] = null;
			$data['username'] = null;
			$data['password'] = null;
		
			$this->load->view('admin_apoteker',$data);
		}
	}

	public function addDokter(){
		$nip = $this->input->post('nip');
		$nama_dokter = $this->input->post('nama_dokter');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$gender = $this->input->post('gender');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$ceknip_dokter = $this->db->query("select * from dokter where nip='$nip'");
		if ($ceknip_dokter->num_rows() == null) {
			$user_data = array(
				'nip' => $nip,
				'nama_dokter' => $nama_dokter,
				'tgl_lahir' => $tgl_lahir,
				'no_hp' => $no_hp,
				'email' => $email,
				'alamat' => $alamat,
				'gender' => $gender,
				'username' => $username,
				'password' => chopra,	
				
			);
			$this->mAdmin->tambahDokter($user_data);
			
			$this->session->set_flashdata('suksestambah',true);
			$data['nip'] = null;
			$data['nama_dokter'] = null;
			$data['tgl_lahir'] = null;
			$data['no_hp'] = null;
			$data['email'] = null;
			$data['alamat'] = null;
			$data['gender'] = null;
			$data['username'] = null;
			$data['password'] = null;
			
	
			redirect('cAdmin/hal_data_dokter');
		}
		else{
			$this->session->flashdata('gagalregistrasi',true);
			$data['nip'] = null;
			$data['nama_dokter'] = null;
			$data['tgl_lahir'] = null;
			$data['no_hp'] = null;
			$data['email'] = null;
			$data['alamat'] = null;
			$data['gender'] = null;
			$data['username'] = null;
			$data['password'] = null;
		
			$this->load->view('admin_dokter',$data);
		}
	}

	//ubah kata sandi Dokter
  public function ubahKataSandiDokter(){
        $username = $this->input->post('username');
        $passBaru = "docChopra_".$this->mAdmin->random_sandibaru(4);
        $this->mAdmin->ubahKataSandiDokter($username,$passBaru);
        $this->session->set_flashdata('sukseskatasandiUbah',true);
        $data['error'] = "";
        $data['password'] = $this->mAdmin->random_katasandi(8);
        $data['sandi'] = $passBaru;
        $data['dokter'] = $this->mAdmin->get_data_dokter();
        $this->load->view('admin_dokter',$data);
    }

//ubah kata sandi Dokter
  public function ubahKataSandiApoteker(){
        $username = $this->input->post('username');
        $passBaru = "parChopra_".$this->mAdmin->random_sandibaru(4);
        $this->mAdmin->ubahKataSandiApoteker($username,$passBaru);
        $this->session->set_flashdata('sukseskatasandiUbah',true);
        $data['error'] = "";
        $data['password'] = $this->mAdmin->random_katasandi(8);
        $data['sandi'] = $passBaru;
        $data['apoteker'] = $this->mAdmin->get_data_apoteker();
        $this->load->view('admin_apoteker',$data);
    }

    //ubah kata sandi Pasien
  public function ubahKataSandiPasien(){
        $username = $this->input->post('username');
        $passBaru = "pasChopra_".$this->mAdmin->random_sandibaru(4);
        $this->mAdmin->ubahKataSandiPasien($username,$passBaru);
        $this->session->set_flashdata('sukseskatasandiUbah',true);
        $data['error'] = "";
        $data['password'] = $this->mAdmin->random_katasandi(8);
        $data['sandi'] = $passBaru;
       $data['pasien'] = $this->mAdmin->get_data_pasien();
        $this->load->view('admin_pasien',$data);
    }
	
	

    public function hapusDokter(){
		$id_dokter = $this->input->post('id_dokter');
		$this->mAdmin->hapusDokter($id_dokter);
		$this->session->set_flashdata('berhasilHapusPeminjam',true);
		redirect('cAdmin/hal_data_dokter','refresh');
	}
	public function hapusApoteker(){
		$id_apoteker = $this->input->post('id_apoteker');
		$this->mAdmin->hapusApoteker($id_apoteker);
		$this->session->set_flashdata('berhasilHapusPeminjam',true);
		redirect('cAdmin/hal_data_apoteker','refresh');
	}
	public function hapusPasien(){
		$id_pasien = $this->input->post('id_pasien');
		$this->mAdmin->hapusPasien($id_pasien);
		$this->session->set_flashdata('berhasilHapusPeminjam',true);
		redirect('cAdmin/hal_data_pasien','refresh');
	}
	public function hapusJadwal(){
		$id_jadwal = $this->input->post('id_jadwal');
		$this->mAdmin->hapusJadwal($id_jadwal);
		$this->session->set_flashdata('berhasilHapusPeminjam',true);
		redirect('cAdmin/hal_data_schedule','refresh');
	}


	public function ubahDataDokter(){
		$idAwal = $this->input->post('idAwal');
		$nama_pengguna_awal = $this->input->post('nama_pengguna_awal');
		$id_dokter = $this->input->post('id_dokter');
		$nip = $this->input->post('nip');
		$nama_dokter = $this->input->post('nama_dokter');
		$username = $this->input->post('username');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$gender = $this->input->post('gender');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		
		$cekid_dokter = $this->mAdmin->cekid_dokter($nip);
		$cekNamaPenggunaDokter = $this->mAdmin->cekNamaPenggunaDokter($username);

		if($idAwal == $nip){
			if($nama_pengguna_awal == $username){
				$hasil = $this->mAdmin->ubahDataDokter($idAwal,$nip,$nama_dokter,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email);
				if($hasil == true){
					$this->session->set_flashdata('berhasil',true);
					redirect('cAdmin/hal_data_dokter','refresh');
				}else{
					$this->session->set_flashdata('tidakBerhasil',true);
					redirect('cAdmin/hal_data_dokter','refresh');
				}
			}else{
				if($cekNamaPenggunaDokter->num_rows() == null){
					$hasil = $this->mAdmin->ubahDataDokter($idAwal,$nip,$nama_dokter,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email);
					if($hasil == true){
						$this->session->set_flashdata('berhasil',true);
						redirect('cAdmin/hal_data_dokter','refresh');
					}else{
						$this->session->set_flashdata('tidakBerhasil',true);
						redirect('cAdmin/hal_data_dokter','refresh');
					}
				}else{
					$this->session->set_flashdata('namaAdaUbah',true);
					redirect('cAdmin/hal_data_dokter','refresh');
				}
			}
		}else{
			if($cekid_dokter->num_rows() == null){
				if($nama_pengguna_awal == $username){
					$hasil = $this->mAdmin->ubahDataDokter($idAwal,$nip,$nama_dokter,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email);
					if($hasil == true){
						$this->session->set_flashdata('berhasil',true);
						redirect('cAdmin/hal_data_dokter','refresh');
					}else{
						$this->session->set_flashdata('tidakBerhasil',true);
						redirect('cAdmin/hal_data_dokter','refresh');
					}
				}else{
					if($cekNamaPenggunaDokter->num_rows() == null){
						$hasil = $this->mAdmin->ubahDataDokter($idAwal,$nip,$nama_dokter,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email);
						if($hasil == true){
							$this->session->set_flashdata('berhasil',true);
							redirect('cAdmin/hal_data_dokter','refresh');
						}else{
							$this->session->set_flashdata('tidakBerhasil',true);
							redirect('cAdmin/hal_data_dokter','refresh');
						}
					}else{
						$this->session->set_flashdata('namaAdaUbah',true);
						redirect('cAdmin/hal_data_dokter','refresh');
					}
				}
			}else{
				$this->session->set_flashdata('IdPeminjamAda',true);
				redirect('cAdmin/hal_data_dokter','refresh');
			}
		}
	}

	public function ubahDataApoteker(){
		$idAwal = $this->input->post('idAwal');
		$nama_pengguna_awal = $this->input->post('nama_pengguna_awal');
		$id_apoteker = $this->input->post('id_apoteker');
		$nip = $this->input->post('nip');
		$nama_apoteker = $this->input->post('nama_apoteker');
		$username = $this->input->post('username');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$gender = $this->input->post('gender');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		
		$cekid_apoteker = $this->mAdmin->cekid_apoteker($nip);
		$cekNamaPenggunaApoteker = $this->mAdmin->cekNamaPenggunaApoteker($username);

		if($idAwal == $nip){
			if($nama_pengguna_awal == $username){
				$hasil = $this->mAdmin->ubahDataApoteker($idAwal,$nip,$nama_apoteker,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email);
				if($hasil == true){
					$this->session->set_flashdata('berhasil',true);
					redirect('cAdmin/hal_data_apoteker','refresh');
				}else{
					$this->session->set_flashdata('tidakBerhasil',true);
					redirect('cAdmin/hal_data_apoteker','refresh');
				}
			}else{
				if($cekNamaPenggunaApoteker->num_rows() == null){
					$hasil = $this->mAdmin->ubahDataApoteker($idAwal,$nip,$nama_apoteker,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email);
					if($hasil == true){
						$this->session->set_flashdata('berhasil',true);
						redirect('cAdmin/hal_data_apoteker','refresh');
					}else{
						$this->session->set_flashdata('tidakBerhasil',true);
						redirect('cAdmin/hal_data_apoteker','refresh');
					}
				}else{
					$this->session->set_flashdata('namaAdaUbah',true);
					redirect('cAdmin/hal_data_apoteker','refresh');
				}
			}
		}else{
			if($cekid_apoteker->num_rows() == null){
				if($nama_pengguna_awal == $username){
					$hasil = $this->mAdmin->ubahDataApoteker($idAwal,$nip,$nama_apoteker,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email);
					if($hasil == true){
						$this->session->set_flashdata('berhasil',true);
						redirect('cAdmin/hal_data_apoteker','refresh');
					}else{
						$this->session->set_flashdata('tidakBerhasil',true);
						redirect('cAdmin/hal_data_apoteker','refresh');
					}
				}else{
					if($cekNamaPenggunaApoteker->num_rows() == null){
						$hasil = $this->mAdmin->ubahDataApoteker($idAwal,$nip,$nama_apoteker,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email);
						if($hasil == true){
							$this->session->set_flashdata('berhasil',true);
							redirect('cAdmin/hal_data_apoteker','refresh');
						}else{
							$this->session->set_flashdata('tidakBerhasil',true);
							redirect('cAdmin/hal_data_apoteker','refresh');
						}
					}else{
						$this->session->set_flashdata('namaAdaUbah',true);
						redirect('cAdmin/hal_data_apoteker','refresh');
					}
				}
			}else{
				$this->session->set_flashdata('IdPeminjamAda',true);
				redirect('cAdmin/hal_data_apoteker','refresh');
			}
		}
	}



	public function ubahDataPasien(){
		$idAwal = $this->input->post('idAwal');
		$nama_pengguna_awal = $this->input->post('nama_pengguna_awal');
		$id_pasien = $this->input->post('id_pasien');
		$id_pasien = $this->input->post('id_pasien');
		$nama_pasien = $this->input->post('nama_pasien');
		$username = $this->input->post('username');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jk = $this->input->post('jk');
		$nama_ibu = $this->input->post('nama_ibu');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		
		$cekid_pasien = $this->mAdmin->cekid_pasien($id_pasien);
		$cekNamaPenggunaPasien = $this->mAdmin->cekNamaPenggunaPasien($username);

		if($idAwal == $id_pasien){
			if($nama_pengguna_awal == $username){
				$hasil = $this->mAdmin->ubahDataPasien($idAwal,$id_pasien,$nama_pasien,$username,$tgl_lahir,$jk,$nama_ibu,$alamat,$no_hp,$email);
				if($hasil == true){
					$this->session->set_flashdata('berhasil',true);
					redirect('cAdmin/hal_data_pasien','refresh');
				}else{
					$this->session->set_flashdata('tidakBerhasil',true);
					redirect('cAdmin/hal_data_pasien','refresh');
				}
			}else{
				if($cekNamaPenggunaPasien->num_rows() == null){
					$hasil = $this->mAdmin->ubahDataPasien($idAwal,$id_pasien,$nama_pasien,$username,$tgl_lahir,$jk,$nama_ibu,$alamat,$no_hp,$email);
					if($hasil == true){
						$this->session->set_flashdata('berhasil',true);
						redirect('cAdmin/hal_data_pasien','refresh');
					}else{
						$this->session->set_flashdata('tidakBerhasil',true);
						redirect('cAdmin/hal_data_pasien','refresh');
					}
				}else{
					$this->session->set_flashdata('namaAdaUbah',true);
					redirect('cAdmin/hal_data_pasien','refresh');
				}
			}
		}else{
			if($cekid_pasien->num_rows() == null){
				if($nama_pengguna_awal == $username){
					$hasil = $this->mAdmin->ubahDataPasien($idAwal,$id_pasien,$nama_pasien,$username,$tgl_lahir,$jk,$nama_ibu,$alamat,$no_hp,$email);
					if($hasil == true){
						$this->session->set_flashdata('berhasil',true);
						redirect('cAdmin/hal_data_pasien','refresh');
					}else{
						$this->session->set_flashdata('tidakBerhasil',true);
						redirect('cAdmin/hal_data_pasien','refresh');
					}
				}else{
					if($cekNamaPenggunaPasien->num_rows() == null){
						$hasil = $this->mAdmin->ubahDataPasien($idAwal,$id_pasien,$nama_pasien,$username,$tgl_lahir,$jk,$nama_ibu,$alamat,$no_hp,$email);
						if($hasil == true){
							$this->session->set_flashdata('berhasil',true);
							redirect('cAdmin/hal_data_pasien','refresh');
						}else{
							$this->session->set_flashdata('tidakBerhasil',true);
							redirect('cAdmin/hal_data_pasien','refresh');
						}
					}else{
						$this->session->set_flashdata('namaAdaUbah',true);
						redirect('cAdmin/hal_data_pasien','refresh');
					}
				}
			}else{
				$this->session->set_flashdata('IdPeminjamAda',true);
				redirect('cAdmin/hal_data_pasien','refresh');
			}
		}
	}



	public function ubahDataJadwal(){
		$idAwal = $this->input->post('idAwal');
		$nama_pengguna_awal = $this->input->post('nama_pengguna_awal');
		$id_jadwal = $this->input->post('id_jadwal');
		$no_antri = $this->input->post('no_antri');
		$waktu = $this->input->post('waktu');
		
		
		$cekid_jadwal = $this->mAdmin->cekid_jadwal($no_antri);
		$cekNamaJadwal = $this->mAdmin->cekNamaJadwal($waktu);

		if($idAwal == $no_antri){
			if($nama_pengguna_awal == $waktu){
				$hasil = $this->mAdmin->ubahDataJadwal($idAwal,$no_antri,$waktu);
				if($hasil == true){
					$this->session->set_flashdata('berhasil',true);
					redirect('cAdmin/hal_data_schedule','refresh');
				}else{
					$this->session->set_flashdata('tidakBerhasil',true);
					redirect('cAdmin/hal_data_schedule','refresh');
				}
			}else{
				if($cekNamaJadwal->num_rows() == null){
					$hasil = $this->mAdmin->ubahDataJadwal($idAwal,$no_antri,$waktu);
					if($hasil == true){
						$this->session->set_flashdata('berhasil',true);
						redirect('cAdmin/hal_data_schedule','refresh');
					}else{
						$this->session->set_flashdata('tidakBerhasil',true);
						redirect('cAdmin/hal_data_schedule','refresh');
					}
				}else{
					$this->session->set_flashdata('namaAdaUbah',true);
					redirect('cAdmin/hal_data_schedule','refresh');
				}
			}
		}else{
			if($cekid_jadwal->num_rows() == null){
				if($nama_pengguna_awal == $waktu){
					$hasil = $this->mAdmin->ubahDataJadwal($idAwal,$no_antri,$waktu);
					if($hasil == true){
						$this->session->set_flashdata('berhasil',true);
						redirect('cAdmin/hal_data_schedule','refresh');
					}else{
						$this->session->set_flashdata('tidakBerhasil',true);
						redirect('cAdmin/hal_data_schedule','refresh');
					}
				}else{
					if($cekNamaJadwal->num_rows() == null){
						$hasil = $this->mAdmin->ubahDataJadwal($idAwal,$no_antri,$waktu);
						if($hasil == true){
							$this->session->set_flashdata('berhasil',true);
							redirect('cAdmin/hal_data_schedule','refresh');
						}else{
							$this->session->set_flashdata('tidakBerhasil',true);
							redirect('cAdmin/hal_data_schedule','refresh');
						}
					}else{
						$this->session->set_flashdata('namaAdaUbah',true);
						redirect('cAdmin/hal_data_schedule','refresh');
					}
				}
			}else{
				$this->session->set_flashdata('IdPeminjamAda',true);
				redirect('cAdmin/hal_data_schedule','refresh');
			}
		}
	}
	// public function ubahDataJadwal(){
	//     $idAwal = $this->input->post('idAwal');
	// 	$nama_pengguna_awal = $this->input->post('nama_pengguna_awal');
	// 	$id_jadwal = $this->input->post('id_jadwal');
	// 	$waktu = $this->input->post('waktu');
	// 	$no_antri = $this->input->post('no_antri');
		
		
	//     $cekid_jadwal = $this->mAdmin->cekid_jadwal($no_antri);
	// 	$cekNamaJadwal = $this->mAdmin->cekNamaJadwal($waktu);

	// 	 if($idAwal == $no_antri){
	// 	 	if($nama_pengguna_awal == $waktu){
	// 			$hasil = $this->mAdmin->ubahDataJadwal($idAwal,$waktu,$no_antri);
	// 		 	if($hasil == true){
	// 		 		$this->session->set_flashdata('berhasil',true);
	// 		 		redirect('cAdmin/hal_data_schedule','refresh');
	// 		 	}else{
	// 		 		$this->session->set_flashdata('tidakBerhasil',true);
	// 				redirect('cAdmin/hal_data_schedule','refresh');
	// 		 	}
	// 		 }else{
	// 		 		if($cekNamaJadwal->num_rows() == null){
	// 	 			$hasil = $this->mAdmin->ubahDataJadwal($idAwal,$waktu,$no_antri);
	// 	 			if($hasil == true){
	// 	 				$this->session->set_flashdata('berhasil',true);
	// 	 				redirect('cAdmin/hal_data_schedule','refresh');
	// 	 			}else{
	// 					$this->session->set_flashdata('tidakBerhasil',true);
	// 	 				redirect('cAdmin/hal_data_schedule','refresh');
	// 	 			}
	// 	 		}else{
	// 	 			$this->session->set_flashdata('namaAdaUbah',true);
	// 	 			redirect('cAdmin/hal_data_schedule','refresh');
	// 	 		}
	// 	}
	// 	 }else{
	// 		 if($cekid_jadwal->num_rows() == null){
	// 		 	if($nama_pengguna_awal == $waktu){
	// 		 		$hasil = $this->mAdmin->ubahDataJadwal($idAwal,$waktu,$no_antri);
	// 		 		if($hasil == true){
	// 		 			$this->session->set_flashdata('berhasil',true);
	// 		 			redirect('cAdmin/hal_data_schedule','refresh');
	// 		 		}else{
	// 		 			$this->session->set_flashdata('tidakBerhasil',true);
	// 		 			redirect('cAdmin/hal_data_schedule','refresh');
	// 		 		}
	// 		 	}else{
	// 			if($cekNamaJadwal->num_rows() == null){
	// 					$hasil = $this->mAdmin->ubahDataJadwal($idAwal,$waktu,$no_antri);
	// 					if($hasil == true){
	// 						$this->session->set_flashdata('berhasil',true);
	// 						redirect('cAdmin/hal_data_schedule','refresh');
	// 					}else{
	// 						$this->session->set_flashdata('tidakBerhasil',true);
	// 						redirect('cAdmin/hal_data_schedule','refresh');
	// 					}
	// 				}else{
	// 					$this->session->set_flashdata('namaAdaUbah',true);
	// 					redirect('cAdmin/hal_data_schedule','refresh');
	// 				}
	// 		 	}
	// 		 }else{
	// 		 	$this->session->set_flashdata('IdPeminjamAda',true);
	// 		 	redirect('cAdmin/hal_data_schedule','refresh');
	// 		 }
	// 	}
	//  }


	public function addSchedule(){
		$waktu = $this->input->post('waktu');
		$no_antri = $this->input->post('no_antri');
		
		$ceknip_jadwal = $this->db->query("select * from jadwal where waktu='$waktu'");
		if ($ceknip_jadwal->num_rows() == null) {
			$user_data = array(
				'waktu' => $waktu,
				'no_antri' => $no_antri,
				
			);
			$this->mAdmin->tambahJadwal($user_data);
			
			$this->session->set_flashdata('suksestambah',true);
			$data['waktu'] = null;
			$data['no_antri'] = null;
	
			redirect('cAdmin/hal_data_schedule');
		}
		else{
			$this->session->flashdata('gagalregistrasi',true);
			$data['waktu'] = null;
			$data['no_antri'] = null;
			$this->load->view('admin_schedule',$data);
		}
	}

	function status($id)
	{
		$this->mAdmin->ubah_status($id);
		
	}

	



}
