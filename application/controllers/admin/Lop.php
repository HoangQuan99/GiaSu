<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('M_data');
		$this->load->library('session');

	}

	public function index()
	{	
		$data['lop'] = $this->M_data->load_data('*','lophoc',array('hidden' => 0));
		$danhdau['active'] = "lop";
		//$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		//$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['menu'] = $this->load->view('admin/page_admin/menu',$danhdau,TRUE);
		$giaodien['body'] = $this->load->view('admin/page_admin/lop',$data,TRUE);
		
		
		
		$this->load->view('admin/home_admin/master',$giaodien);
	}
	
	public function insert()
	{
		/*if (!empty($_FILES['image']['name'])) {
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
	      }*/
	     $frm = $this->input->post();
		$data['id'] = $frm['id'];
		$data['monday'] = $frm['monday'];
		$data['lopday'] = $frm['lopday'];
		$data['diachi'] = $frm['diachi'];
		$data['luong'] = $frm['luong'];
		$data['sobuoi'] = $frm['sobuoi'];
		$data['thoigian'] = $frm['thoigian'];
		$data['thongtin'] = $frm['thongtin'];
		$data['yeucau'] = $frm['yeucau'];
		$data['lienhe'] = $frm['lienhe'];
		$this->M_data->insert('lophoc',$data);
	     redirect(base_url('admin/lop'));
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
		echo "<script> alert('Bạn đã thêm thành công!'); </script>";
		echo "<script> window.location.href = '../';</script>";
	     
	     
	}
	public function sua_lop()
	{
		//$frm = $this->input->post();
		$data['id'] = $_POST['id'];
		$data['monday'] = $_POST['monday'];
		$data['lopday'] = $_POST['lopday'];
		$data['diachi'] = $_POST['diachi'];
		$data['luong'] = $_POST['luong'];
		$data['sobuoi'] = $_POST['sobuoi'];
		$data['thoigian'] = $_POST['thoigian'];
		$data['thongtin'] = $_POST['thongtin'];
		$data['yeucau'] = $_POST['yeucau'];
		$data['lienhe'] = $_POST['lienhe'];
		$data2 = array('id' =>$_POST['id'] );
		
		 $this->M_data->update('lophoc',$data,$data2);
	    redirect(base_url('admin/lop'));
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
	}

 public function delete_index() 
{
	$id = $this->input->post('id');	
	//$id = $_POST['id'];
	//$sql = "DELETE FROM 'lophoc' WHERE id='$id'";
  	$this->M_data->delete('lophoc',$id);
  	redirect(base_url('admin/lop'));
  	echo "<script> alert('Bạn đã xóa thành công!'); </script>";
	echo "<script> window.location.href = '../';</script>";


}

}
?>