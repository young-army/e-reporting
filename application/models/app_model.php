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
	
	/*function ambil_master_kenakalan($id_master_kenakalan){
	$mast = $this->db->query("select * from tbl_kenakalan where id='$id_master_kenakalan'")->row();
	return $mast;
	}*/
	
	function simpan_master_kenakalan(){
		$kenakalan = $this->input->post('kenakalan');
		$poin = $this->input->post('poinkenakalan');
		$data = array(
		'kenakalan' => $kenakalan,
		'poin_kenakalan' => $poin
		);
		$this->db->update('tbl_kenakalan',$data);
		//$this->db->query("update tbl_kenakalan set kenakalan='$kenakalan', poin_kenakalan='$poin' where id='$ubah'");
	}
	
	
}


