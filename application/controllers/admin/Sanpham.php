<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sanpham extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('M_data');
		$this->load->library('session');
	}

	public function index()
	{	
		$data['sanpham'] = $this->M_data->load_data('*','sanpham',array('hidden' => 0));
		$data['hang'] = $this->M_data->load_data('*','hang',array('hidden' => 0));
		$danhdau['active'] = "sanpham";
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['menu'] = $this->load->view('admin/page_admin/menu',$danhdau,TRUE);
		$giaodien['body'] = $this->load->view('admin/page_admin/sanpham',$data,TRUE);
		$this->load->view('admin/home_admin/master',$giaodien);
	}
	// public function insert()
	// {
	// 	if (!empty($_FILES['image']['name'])) {
	//         $config['upload_path'] = './public/image/';
	//         $config['allowed_types'] = 'jpg|jpeg|png|gif';
	//         $config['file_name'] = $_FILES['image']['name'];
	//     	$config['overwrite'] = TRUE;  
	//         $this->load->library('upload', $config);
	//         $this->upload->initialize($config);
	//         if ($this->upload->do_upload('image')) {
 //         		$uploadData = $this->upload->data();
 //          		$data["image"] = $uploadData['file_name'];
 //       	 	} else
 //       	 	{
 //       	 		$datas['errors'] = $this->upload->display_errors();
 //         		$data["image"] = 'unknow.jpg';
	//         }
	//       }else{
	//       	$datas['errors'] = $this->upload->display_errors();
	//         $data["image"] = 'unknow.jpg';
	//       }
	     
	//       $this->M_data->insert('banner',$data);
	//       redirect(base_url('admin/banner'));
	// }
}
?>