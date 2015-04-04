<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('session_login')){
			redirect('login');
		}
	}
	
	function index()
	{
		$data['page']   = 'welcome';
		$this->load->view('template',$data);
	}
	
	function my_account()
	{
		$data['page'] = 'setting/my_account';
		$this->load->view('template',$data);
	}
	
	// MASTER KARYAWAN
	
	function master_karyawan()
	{	$data['karyawan'] = $this->app_model->karyawan();
		$data['page'] = 'master/master_karyawan';
		$this->load->view('template_table',$data);
	}
	
	function add_master_karyawan()
	{	
		$data['page'] = 'master/add_master_karyawan';
		$this->load->view('template',$data);
	
	}
	
	function add_karyawan()
	{	$this->app_model->simpan_data_karyawan();
		redirect('dashboard/master_karyawan');
	}
	
	function edit_master_karyawan()
	{	
		$data['page'] = 'master/edit_master_karyawan';
		$this->load->view('template',$data);
	}

	function delete_karyawan($id)
	{
		$this->app_model->delete($id);
		redirect('dashboard/master_karyawan');
	}
	
	function cancel()
	{
		redirect('dashboard/master_karyawan');
	}

	//MASTER SISWA

	function master_siswa()
	{
		$data['master_siswa'] = $this->app_model->ambil_master_siswa();
		$data['page'] = 'master/master_siswa';	
		$this->load->view('template_table',$data);
	}
	
	function add_master_siswa()
	{	
		$data['page'] = 'master/add_master_siswa';
		$this->load->view('template',$data);
	}

	function add_siswa(){
		$this->app_model->simpan_data_siswa();
		redirect('dashboard/master_siswa');
	}
	
	function edit_master_siswa()
	{
		$data['page'] = 'master/edit_master_siswa';
		$this->load->view('template',$data);
	}
	function delete_master_siswa($id){
		$this->app_model->delete_siswa($id);
		redirect('dashboard/master_siswa');
	}
	
	//MASTER KENAKALAN
	
	function master_kenakalan()
	{
		$data['page'] = 'master/master_kenakalan';
		$this->load->view('template_table',$data);
	}
	
	function add_master_kenakalan()
	{
		$data['page'] = 'master/add_master_kenakalan';
		$this->load->view('template',$data);
	}
	
	function edit_master_kenakalan()
	{
		$data['page'] = 'master/edit_master_kenakalan';
		$this->load->view('template',$data);
	}
}
