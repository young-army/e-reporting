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

		// load view yang akan digenerate atau diconvert
		// contoh kita akan membuat pdf dari halaman welcome codeigniter
		$this->load->view('welcome_message');
		// dapatkan output html
		
		$html = $this->output->get_output();
		
		// Load/panggil library dompdfnya
		$this->load->library('dompdf_gen');
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		//utk menampilkan preview pdf
		$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
		//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
		//$this->dompdf->stream("welcome.pdf");
		
	
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
