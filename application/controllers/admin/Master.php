<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('M_data');
		$this->load->library('session');
	}
	public function index()
	{
		$data['active'] = '';
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['menu'] = $this->load->view('admin/page_admin/menu',$data,TRUE);
		$this->load->view('admin/home_admin/master',$giaodien);
	}
}
?>