<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Giasudangky extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('M_data');
		$this->load->library('session');
	}

	public function index()
	{	
		$data['dsgiasu'] = $this->M_data->load_data('*','dangkylamgiasu',array('hidden' => 0));
		$danhdau['active'] = "dsgiasu";
		$giaodien['menu'] = $this->load->view('admin/page_admin/menu',$danhdau,TRUE);
		$giaodien['body'] = $this->load->view('admin/page_admin/giasudangky',$data,TRUE);
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
		//$data['id'] = $frm['id'];
		$data['fullname'] = $frm['fullname'];
		$data['address'] = $frm['address'];
		$data['phone'] = $frm['phone'];
		$data['cmnd'] = $frm['cmnd'];
		$data['email'] = $frm['email'];
		$data['id_lop'] = $frm['id_lop'];
		$data['mon_hoc'] = $frm['mon_hoc'];
		$data['gioi_tinh'] = $frm['gioi_tinh'];
		$data['so_buoi'] = $frm['so_buoi'];
		$data['thoi_gian'] = $frm['thoi_gian'];
		$data['id_level'] = $frm['id_level'];
		$data['noi_lv'] = $frm['noi_lv'];
		$data['so_buoi'] = $frm['so_buoi'];
		$data['uu_diem'] = $frm['uu_diem'];
		$this->M_data->insert('dangkylamgiasu',$data);// em làm i chang lun, nhưng chỗ này là update nha
	     redirect(base_url('admin/giasudangky'));
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
	}
	public function sua_giasudk()
	{
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
		// $data['image'] = $_POST['image'];
		$data['address'] = $_POST['address'];
		$data['phone'] = $_POST['phone'];
		$data['cmnd'] = $_POST['cmnd'];
		$data['email'] = $_POST['email'];
		$data['id_lop'] = $_POST['id_lop'];
		$data['mon_hoc'] = $_POST['mon_hoc'];
		$data['gioi_tinh'] = $_POST['gioi_tinh'];
		$data['so_buoi'] = $_POST['so_buoi'];
		$data['thoi_gian'] = $_POST['thoi_gian'];
		$data['id_level'] = $_POST['id_level'];
		$data['noi_lv'] = $_POST['noi_lv'];
		$data['uu_diem'] = $_POST['uu_diem'];
		 $data2 = array('id' =>$_POST['id'] );
		//$data2 = $_POST['id'];
		// var_dump($data2);
		// var_dump($data);
		 $this->M_data->update('dangkylamgiasu',$data,$data2);
	     redirect(base_url('admin/Giasudangky'));
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
	}
	 public function delete_index() 
{
	$id = $this->input->post('id');	
	//$id = $_POST['id'];
	//$sql = "DELETE FROM 'lophoc' WHERE id='$id'";
  	$this->M_data->delete('dangkylamgiasu',$id);
 //  	echo "<script> alert('Bạn đã xóa thành công!'); </script>";
	// echo "<script> window.location.href = '../';</script>";
	echo "1";


}
	
}
?>