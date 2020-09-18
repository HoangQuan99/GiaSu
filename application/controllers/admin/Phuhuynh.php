<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phuhuynh extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('M_data');
		$this->load->library('session');

	}

	public function index()
	{	
		$data['phuhuynh'] = $this->M_data->load_data('*','dangkytimgiasu',array('hidden' => 0));
		$danhdau['active'] = "phuhuynh";
		//$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		//$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['menu'] = $this->load->view('admin/page_admin/menu',$danhdau,TRUE);
		$giaodien['body'] = $this->load->view('admin/page_admin/phuhuynh',$data,TRUE);
		
		
		
		$this->load->view('admin/home_admin/master',$giaodien);
	}
	
	public function insert()
	{
		
	     $frm = $this->input->post();
		$data['id'] = $frm['id'];
		$data['fullname'] = $frm['fullname'];
		$data['address'] = $frm['address'];
		$data['phone'] = $frm['phone'];
		$data['email'] = $frm['email'];
		$data['id_lop'] = $frm['id_lop'];
		$data['mon_hoc'] = $frm['mon_hoc'];
		$data['so_hoc_sinh'] = $frm['so_hoc_sinh'];
		$data['hoc_luc'] = $frm['hoc_luc'];
		$data['so_buoi'] = $frm['so_buoi'];
		$data['thoi_gian'] = $frm['thoi_gian'];
		$data['yeu_cau'] = $frm['yeu_cau'];
		$this->M_data->insert('dangkytimgiasu',$data);
	     redirect(base_url('admin/phuhuynh'));
	     
	     
	}
	public function sua_phuhuynh()
	{
		//$frm = $this->input->post();
		$data['fullname'] = $_POST['fullname'];
		$data['address'] = $_POST['address'];
		$data['phone'] = $_POST['phone'];
		$data['email'] = $_POST['email'];
		$data['id_lop'] = $_POST['id_lop'];
		$data['mon_hoc'] = $_POST['mon_hoc'];
		$data['so_hoc_sinh'] = $_POST['so_hoc_sinh'];
		$data['hoc_luc'] = $_POST['hoc_luc'];
		$data['so_buoi'] = $_POST['so_buoi'];
		$data['thoi_gian'] = $_POST['thoi_gian'];
		$data['yeu_cau'] = $_POST['yeu_cau'];
		$data2 = array('id' =>$_POST['id'] );
		//var_dump($data);
		 $this->M_data->update('dangkytimgiasu',$data,$data2);
	     redirect(base_url('admin/phuhuynh'));
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
	}

 public function delete_index() 
{
	$id = $this->input->post('id');	
	//$id = $_POST['id'];
	//$sql = "DELETE FROM 'lophoc' WHERE id='$id'";
  	$this->M_data->delete('dangkytimgiasu',$id);


}

}
?>