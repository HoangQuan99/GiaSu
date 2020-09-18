<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('M_data');
		$this->load->library('session');
	}

	public function index()
	{	
		if($this->session->has_userdata('user'))
		{
			redirect(base_url('admin/master'));
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
	public function dangnhap()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check = $this->M_data->load_data('*','user',array('username' => $username , 'password' => md5($password)));
		if(count($check) > 0)
		{
			$this->session->set_userdata('user',$check);
			redirect(base_url('admin/master'));
		}
		else
		{
			echo "<script> alert('Sai mật khẩu!'); </script>";
			echo "<script> window.location.href = '../';</script>";
		}

	}
	
}
?>