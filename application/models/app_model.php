<?php 

class App_model extends CI_Model{

	function auth($user,$pass){
		$check = $this->db->query("select tbl_user.*,tbl_karyawan.nik,tbl_karyawan.nama_karyawan,tbl_karyawan.jabatan from tbl_user join tbl_karyawan on tbl_user.nik = tbl_karyawan.nik where tbl_user.username='$user' and tbl_user.password='$pass'");
		return $check;
	}	
	
	function tampilan_kenakalan(){
		$data = $this->db->query("select * from tbl_kenakalan")->result();
		return $data;
	}
	
	function add_master_kenakalan(){
		$check = $this->input->post('kenakalan');
		$tes = $this->input->post('poin');
		$data = array(
		'kenakalan' => $check,
		'poin' => $tes
		);
		$this->db->insert('tbl_kenakalan',$data);
		}
		
	function delete_master_kenakalan($id_apos)
	{
		$this->db->where('id',$id_apos);
		$this->db->delete('tbl_kenakalan');
	}
	
	
	function edit_master_kenakalan(){
		$h=$this->db->get("tbl_kenakalan");
		return $h->result();
	}
//MASTER_SISWA
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
	function delete_siswa($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_siswa');
	}
	function update_master_siswa($id){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jns_kel = $this->input->post('jns_kel');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		
		$this->db->query("update tbl_siswa set nis='$nis',nama_siswa='$nama',jns_kel='$jns_kel',kelas='$kelas',jurusan='$jurusan' where id='$id'");
		
	}
	function edit_master_siswa($id){
		$hasil = $this->db->query("select * from tbl_siswa where id='$id'")->row($id);
		return $hasil;
	}

//MASTER KARYAWAN	
	function karyawan()
	{
		$query=$this->db->query("select * from tbl_karyawan")->result();
		return $query;
	}
	
	function simpan_data_karyawan()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('karyawan');
		$jabatan = $this->input->post('jabatan');
		$data = array(
		'nik' => $nik,
		'nama_karyawan' => $nama,
		'jabatan' => $jabatan
		);
		$this->db->insert('tbl_karyawan',$data);
	}
	
//master kenakalan//
	function data_kenakalan()
	{
		$tampil = $this->db->query("select * from tbl_kenakalan")->result();
		return $tampil;
	}
	
	function tambah_master_kenakalan()
	{
		$nakal = $this->input->post('kenakalan');
		$poin = $this->input->post('poin');
		$data = array(
		'kenakalan' => $nakal,
		'poin' => $poin
		);
		$this->db->insert('tbl_kenakalan',$data);
	}
	
	function ubah_master_kenakalan($id)
	{
		$ed = $this->db->query("select * from tbl_kenakalan where id='$id'")->row($id);
		return $ed;
	}
	
	function simpan_master_kenakalan($id){
		$kenakalan = $this->input->post('kenakalan');
		$poin = $this->input->post('poin');
		$data = array(
		'kenakalan' => $kenakalan,
		'poin' => $poin
		);
		//$this->db->update('tbl_kenakalan',$data);
		$this->db->query("update tbl_kenakalan set kenakalan='$kenakalan', poin='$poin' where id='$id'");
	}
	
	function hapus_master_kenakalan($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_kenakalan');
	}
	
	//=========
	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_karyawan');
	}
	
	function edit_master_karyawan($id)
	{
		$query = $this->db->query("select * from tbl_karyawan where id='$id'")->row($id);
		return $query;
	}
	
	function update_master_karyawan($id)
	{
	$nik = $this->input->post('nik');
	$nama = $this->input->post('nama');
	$jbt = $this->input->post('jabatan');
	
	$this->db->query("update tbl_karyawan set nik='$nik',nama_karyawan='$nama',jabatan='$jbt' where id='$id'");
	}
	

}
