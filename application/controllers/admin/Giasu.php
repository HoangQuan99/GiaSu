<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Giasu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('M_data');
		$this->load->library('session');
	}

	public function index()
	{	
		$data['giasu'] = $this->M_data->load_data('*','giasutieubieu',array('hidden' => 0));
		$danhdau['active'] = "giasu";
		//$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		//$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['menu'] = $this->load->view('admin/page_admin/menu',$danhdau,TRUE);
		$giaodien['body'] = $this->load->view('admin/page_admin/giasu',$data,TRUE);
		$this->load->view('admin/home_admin/master',$giaodien);
	}
	public function insert()
	{
		if (!empty($_FILES['image']['name'])) {
	        $config['upload_path'] = './public/image/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image')) {
         		$uploadData = $this->upload->data();
          		$data["image"] = $uploadData['file_name'];
       	 	} else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["image"] = 'unknow.jpg';
	        }
	      }else{
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["image"] = 'unknow.jpg';
	      }
		$frm = $this->input->post();
		$data['id'] = $frm['id'];
		$data['fullname'] = $frm['fullname'];
		$data['namsinh'] = $frm['namsinh'];
		$data['hienla'] = $frm['hienla'];
		$data['truong'] = $frm['truong'];
		$data['chuyennganh'] = $frm['chuyennganh'];
		$data['namtotnghiep'] = $frm['namtotnghiep'];
		$data['nhanday'] = $frm['nhanday'];
		$data['cacmon'] = $frm['cacmon'];
		$data['khuvuc'] = $frm['khuvuc'];
		$data['thongtinkhac'] = $frm['thongtinkhac'];
		$this->M_data->insert('giasutieubieu',$data);
	     redirect(base_url('admin/giasu'));
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
	}
	public function sua_giasu()
	{
		// $frm = $this->input->post();
		// $data['id'] = $_POST['id'];
		// $data['fullname'] = $_POST['fullname'];
		// // $data['image']	=$_POST['image'];
		// $data['namsinh'] = $_POST['namsinh'];
		// $data['hienla'] = $_POST['hienla'];
		// $data['truong'] = $_POST['truong'];
		// $data['chuyennganh'] = $_POST['chuyennganh'];
		// $data['namtotnghiep'] = $_POST['namtotnghiep'];
		// $data['nhanday'] = $_POST['nhanday'];
		// $data['cacmon'] = $_POST['cacmon'];
		// $data['khuvuc'] = $_POST['khuvuc'];
		// $data['thongtinkhac'] = $_POST['thongtinkhac'];
		// $data2 = array('id' =>$_POST['id'] );

		// var_dump($data);
		$frm = $this->input->post();
		$data['id'] = $_POST['id'];
		if (!empty($_FILES['image']['name'])) {
	        $config['upload_path'] = './public/image/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image')) {
         		$uploadData = $this->upload->data();
          		$data["image"] = $uploadData['file_name'];
       	 	} else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["image"] = 'unknow.jpg';
	        }
	      }else{
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["image"] = 'unknow.jpg';
	      }
		$data['fullname'] = $_POST['fullname'];
		$data['namsinh'] = $_POST['namsinh'];
		$data['hienla'] = $_POST['hienla'];
		$data['truong'] = $_POST['truong'];
		$data['chuyennganh'] = $_POST['chuyennganh'];
		$data['namtotnghiep'] = $_POST['namtotnghiep'];
		$data['nhanday'] = $_POST['nhanday'];
		$data['cacmon'] = $_POST['cacmon'];
		$data['khuvuc'] = $_POST['khuvuc'];
		$data['thongtinkhac'] = $_POST['thongtinkhac'];
		$data2 = array('id' =>$_POST['id'] );
		
		 $data2 = array('id' =>$_POST['id'] );
		 $this->M_data->update('giasutieubieu',$data,$data2);
	     redirect(base_url('admin/giasu'));
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
	}
	 public function delete_index() 
{
	$id = $this->input->post('id');	
	//$id = $_POST['id'];
	//$sql = "DELETE FROM 'lophoc' WHERE id='$id'";
  	$this->M_data->delete('giasutieubieu',$id);

}
	
}
?>