<?php 

class App_model extends CI_Model{

	function auth($user,$pass){
		$check = $this->db->query("select tbl_user.*,tbl_karyawan.nik,tbl_karyawan.nama_karyawan,tbl_karyawan.jabatan from tbl_user join tbl_karyawan on tbl_user.nik = tbl_karyawan.nik where tbl_user.username='$user' and tbl_user.password='$pass'");
		return $check;
	}
	function ambil_master_siswa(){
		$hasil = $this->db->query("select * from tbl_siswa")->result();
		return $hasil;
	}
	function simpan_data_siswa(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jns_kel = $this->input->post('jns_kel');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');		
		$data = array(
		'nis' => $nis,
		'nama_siswa' => $nama,
		'jns_kel' => $jns_kel,
		'kelas' => $kelas,
		'jurusan' => $jurusan
		);
		
		$this->db->insert('tbl_siswa',$data);
		
	}
}