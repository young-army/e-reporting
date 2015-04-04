<?php 

class App_model extends CI_Model{

	function auth($user,$pass){
		$check = $this->db->query("select tbl_user.*,tbl_karyawan.nik,tbl_karyawan.nama_karyawan,tbl_karyawan.jabatan from tbl_user join tbl_karyawan on tbl_user.nik = tbl_karyawan.nik where tbl_user.username='$user' and tbl_user.password='$pass'");
		return $check;
	}
	
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
	
	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_karyawan');
	}
	
}