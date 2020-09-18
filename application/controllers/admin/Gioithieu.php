<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gioithieu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('M_data');
		$this->load->library('session');

	}

	public function index()
	{	
		$data['gioi_thieu'] = $this->M_data->load_data('*','banggiags',array('hidden' => 0));
		$danhdau['active'] = "gioi_thieu";
		//$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		//$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['menu'] = $this->load->view('admin/page_admin/menu',$danhdau,TRUE);
		$giaodien['body'] = $this->load->view('admin/page_admin/gioithieu',$data,TRUE);
		
		
		
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
		//$data['id'] = $frm['id'];
		$data['name'] = $frm['name'];
		//$data['content'] = $frm['content'];
		$data['mota'] =$frm['ckeditor'];
		
		$this->M_data->insert('banggiags',$data);
	     redirect(base_url('admin/gioithieu'));
	     
	     
	}
	public function sua_gioithieu()
	{
		//$frm = $this->input->post();
		$data['name'] = $_POST['name'];
		$data['mota'] = $_POST['ckeditor'];
		$data2 = array('id' =>$_POST['id'] );
		//var_dump($data);
		 $this->M_data->update('banggiags',$data,$data2);
	     redirect(base_url('admin/gioithieu'));
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
	}

 public function delete_index() 
{
	$id = $this->input->post('id');	
	//$id = $_POST['id'];
	//$sql = "DELETE FROM 'lophoc' WHERE id='$id'";
  	$this->M_data->delete('banggiags',$id);


}

}
?>