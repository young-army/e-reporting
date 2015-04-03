<?php
//ggggggg
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
	
	function master_karyawan()
	{
		$data['page'] = 'master/master_karyawan';
		$this->load->view('template_table',$data);
	}
	
	function add_master_karyawan()
	{
		$data['page'] = 'master/add_master_karyawan';
		$this->load->view('template',$data);
	}
	
	function edit_master_karyawan()
	{
		$data['page'] = 'master/edit_master_karyawan';
		$this->load->view('template',$data);
	}
	
	function master_siswa()
	{
		$data['page'] = 'master/master_siswa';
		$this->load->view('template_table',$data);
	}
	
	function add_master_siswa()
	{
		$data['page'] = 'master/add_master_siswa';
		$this->load->view('template',$data);
	}
	
	function edit_master_siswa()
	{
		$data['page'] = 'master/edit_master_siswa';
		$this->load->view('template',$data);
	}
	
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
