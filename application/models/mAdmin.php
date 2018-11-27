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
		public function get_data_schedule(){
			$hasil = $this->db->query("select * from jadwal");
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

		public function tambahApoteker($data){ // array of data
	      extract($data) ; 
	      $this->db->query("insert into apoteker(nip,nama_apoteker,tgl_lahir,no_hp,email,alamat,gender,username,password) 
	        values('$nip','$nama_apoteker','$tgl_lahir','$no_hp','$email','$alamat','$gender','$username',md5('$password'))");
    }
    public function tambahDokter($data){ // array of data
	      extract($data) ; 
	      $this->db->query("insert into dokter(nip,nama_dokter,tgl_lahir,no_hp,email,alamat,gender,username,password) 
	        values('$nip','$nama_dokter','$tgl_lahir','$no_hp','$email','$alamat','$gender','$username',md5('$password'))");
    }
     public function tambahJadwal($data){ // array of data
	      extract($data) ; 
	      $this->db->query("insert into jadwal(no_antri,waktu) 
	        values('$no_antri','$waktu')");
    }

    function ambil_datadokter(){
		$query = $this->db->query("select nip, nama_dokter,gender,no_hp  from dokter ");
		return $query;
	}	

	//random_sandibaru 
    public function random_sandibaru($length=4) {
        $chars = "ABCDEFGHJKLMNPQRSTUVWXYZ123456789";
        $sandi = substr( str_shuffle( $chars ), 0, $length );
        return $sandi;
    }
    //ubahKataSandiDokter
    public function ubahKataSandiDokter($username,$passBaru){
       
      $this->db->query("update dokter set password=md5('$passBaru') where username='$username'");
    }
    //random_katasandi
    public function random_katasandi($length=4) {
        $chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ123456789";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }
    //ubahKataSandiApoteker
    public function ubahKataSandiApoteker($username,$passBaru){
       
      $this->db->query("update apoteker set password=md5('$passBaru') where username='$username'");
    }
    public function ubahKataSandiPasien($username,$passBaru){
       
      $this->db->query("update pasien set password=md5('$passBaru') where username='$username'");
    }
    
    public function hapusDokter($id_dokter){
			$this->db->query("delete from dokter where id_dokter='$id_dokter'");
		}

	public function hapusApoteker($id_apoteker){
			$this->db->query("delete from apoteker where id_apoteker='$id_apoteker'");
		}
	public function hapusPasien($id_pasien){
			$this->db->query("delete from pasien where id_pasien='$id_pasien'");
		}
	public function hapusJadwal($id_jadwal){
			$this->db->query("delete from jadwal where id_jadwal='$id_jadwal'");
		}

	public function cekid_dokter($nip){
			$hasil = $this->db->query("select * from dokter where nip='$nip'");
			return $hasil;
		}
	public function cekid_jadwal($id_jadwal){
			$hasil = $this->db->query("select * from jadwal where id_jadwal='$id_jadwal'");
			return $hasil;
		}
	public function cekNamaJadwal($waktu){
			$hasil = $this->db->query("select * from jadwal where waktu='$waktu'");
			return $hasil;
		}

	public function cekNamaPenggunaDokter($username){
			$hasil = $this->db->query("select * from dokter where username='$username'");
			return $hasil;
		}

	public function ubahDataDokter($idAwal,$nip,$nama_dokter,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email){
			$hasil = $this->db->query("update dokter set nip='$nip',nama_dokter='$nama_dokter',username='$username',tgl_lahir='$tgl_lahir',gender='$gender',alamat='$alamat',no_hp='$no_hp',email='$email' where nip='$idAwal'");
			return $hasil;
		}
	public function ubahDataJadwal($idAwal,$no_antri,$waktu){
			$hasil = $this->db->query("update jadwal set no_antri='$no_antri',waktu='$waktu' where no_antri='$idAwal'");
			return $hasil;
		}

	public function cekid_apoteker($nip){
			$hasil = $this->db->query("select * from apoteker where nip='$nip'");
			return $hasil;
		}

	public function cekNamaPenggunaApoteker($username){
			$hasil = $this->db->query("select * from apoteker where username='$username'");
			return $hasil;
		}

	public function ubahDataApoteker($idAwal,$nip,$nama_apoteker,$username,$tgl_lahir,$gender,$alamat,$no_hp,$email){
			$hasil = $this->db->query("update apoteker set nip='$nip',nama_apoteker='$nama_apoteker',username='$username',tgl_lahir='$tgl_lahir',gender='$gender',alamat='$alamat',no_hp='$no_hp',email='$email' where nip='$idAwal'");
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

	public function ubahDataPasien($idAwal,$id_pasien,$nama_pasien,$username,$tgl_lahir,$jk,$nama_ibu,$alamat,$no_hp,$email){
			$hasil = $this->db->query("update pasien set id_pasien='$id_pasien',nama_pasien='$nama_pasien',username='$username',tgl_lahir='$tgl_lahir',jk='$jk',nama_ibu='$nama_ibu',alamat='$alamat',no_hp='$no_hp',email='$email' where id_pasien='$idAwal'");
			return $hasil;
		}
		function ubah_status($id)
	{
		$status="";
		$hasil['status']="Booked";
		$this->db->query("UPDATE jadwal SET status='$status' WHERE id_jadwal !='$id'");
		$this->db->where('id_status', $id);
		$this->db->update('jadwal', $hasil);
	}

}
