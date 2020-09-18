<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Handling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('M_data');
		$this->load->library('session');
			
	}

	public function index()
	{	
		/*if($id_hang == '')
		{
			$data['sanpham'] = $this->M_data->load_data('*','sanpham',array('hidden' => 0));
		}
		else
		{
			$data['sanpham'] = $this->M_data->load_data('*','sanpham',array('hidden' => 0,'id_hang' => $id_hang));
		}
		
		$data['hanghieu'] = $this->M_data->load_data('*','hang',array('hidden' => 0));
		$data['sanphammoi'] = $this->M_data->load_limit('*','sanpham',array('hidden' => 0),'create_at',3);
		$data['banner'] = $this->M_data->load_data('*','banner',array('hidden' => 0));
		$danhdau['trangchu'] = 'active'; */
		// ở đây k có mon hoc nên nó báo lỗi k có mon hoc
		// vì em sai chung cái trang chủ
		$data['dsgiasu']= $this->M_data->load_limit('*','giasutieubieu',array('hidden' => 0),'create_at',3);
		$data['lop'] = $this->M_data->load_limit('*','lop',array('hidden' => 0),'create_at',3);
		$data['monhoc'] = $this->M_data->load_limit('*','monhoc',array('hidden' => 0),'create_at',3);
		$data['lophoc'] = $this->M_data->load_limit('*','lophoc',array('hidden' => 0),'create_at',3);
		$data['bangiags'] = $this->M_data->load_limit('*','banggiags',array('hidden' => 0),'create_at',3);

		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE); // trang chu ở day nek
		$this->load->view('home/master',$giaodien);
	}
	public function dangkytimgiasu()
	{
		
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/dangkytimgiasu',NULL,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function dangkylamgiasu()
	{
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/dangkylamgiasu',NULL,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function hocphithamkhao()
	{
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/hocphithamkhao',NULL,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function dangkytimgiasu2()
	{
		$frm = $this->input->post();
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
		$data['id_level'] = $frm['id_level'];
		$data['yeu_cau'] = $frm['yeu_cau'];
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
		$this->M_data->insert('dangkytimgiasu',$data);
		echo "<script> alert('Bạn đã đăng kýthành công!'); </script>";
		echo "<script> window.location.href = 'http://localhost:88/giasu/handling/dangkytimgiasu';</script>";

	}
	public function dangkychongiasu()
	{
		$frm2 = $this->input->post();
		$data2['fullname'] = $frm2['fullname'];
		$data2['address'] = $frm2['address'];
		$data2['phone'] = $frm2['phone'];
		$data2['email'] = $frm2['email'];
		$data2['id_lop'] = $frm2['id_lop'];
		$data2['mon_hoc'] = $frm2['mon_hoc'];
		$data2['so_hoc_sinh'] = $frm2['so_hoc_sinh'];
		$data2['hoc_luc'] = $frm2['hoc_luc'];
		$data2['so_buoi'] = $frm2['so_buoi'];
		$data2['thoi_gian'] = $frm2['thoi_gian'];
		$data2['id_level'] = $frm2['id_level'];
		$data2['yeu_cau'] = $frm2['yeu_cau'];
		//$dangkytimgiasu = $this->session->userdata("dangkytimgiasu");
		$this->M_data->insert('dangkychongiasu',$data2);
		echo "<script> alert('Bạn đã đăng kýthành công!'); </script>";
		echo "<script> window.location.href = '../';</script>";
	}
	public function dangkylamgiasu2()
	{
		$frm = $this->input->post();
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
		$data['uu_diem'] = $frm['uu_diem'];
		$data['image'] = $frm['image'];
		$this->M_data->insert('dangkylamgiasu',$data);
		echo "<script> alert('Bạn đã đăng kýthành công!'); </script>";
		echo "<script> window.location.href = 'http://localhost:88/giasu/handling/dangkylamgiasu';</script>";

	}
	
	public function phuhuynhcanbiet()
	{
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/phuhuynhcanbiet',NULL,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function dichvugiasu()
	{
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/dichvugiasu',NULL,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function giasutieubieu()
	{
		$data['dsgiasu'] = $this->M_data->load_limit('*','giasutieubieu',array('hidden' => 0),'create_at',3);
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/giasutieubieu',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function datthem($id = '')
	{
		
		$lophoc = $this->M_data->load_data('*','lophoc',array('id' => $id));
		if($this->session->has_userdata('chitietlophoc'))
		{
			$arr_old = $this->session->userdata("chitietlophoc");
			$arr_new['id'] = $id;
			$arr_new['monday'] = $lophoc[0]['monday'];
			$arr_new['lopday'] = $lophoc[0]['lopday'];
			$arr_new['diachi'] = $lophoc[0]['diachi'];
			$arr_new['luong'] = $lophoc[0]['luong'];
			$arr_new['sobuoi'] = $lophoc[0]['sobuoi'];
			$arr_new['thoigian'] = $lophoc[0]['thoigian'];
			$arr_new['thongtin'] = $lophoc[0]['thongtin'];
			$arr_new['yeucau'] = $lophoc[0]['yeucau'];
			$arr_new['lienhe'] = $lophoc[0]['lienhe'];
			array_push($arr_old, $arr_new);
			$this->session->set_userdata("chitietlophoc",$arr_old);
		}
		else
		{
			$arr_new[0]['id'] = $id;
			$arr_new[0]['monday'] = $lophoc[0]['monday'];
			$arr_new[0]['lopday'] = $lophoc[0]['lopday'];
			$arr_new[0]['diachi'] = $lophoc[0]['diachi'];
			$arr_new[0]['luong'] = $lophoc[0]['luong'];
			$arr_new[0]['sobuoi'] = $lophoc[0]['sobuoi'];
			$arr_new[0]['thoigian'] = $lophoc[0]['thoigian'];
			$arr_new[0]['thongtin'] = $lophoc[0]['thongtin'];
			$arr_new[0]['yeucau'] = $lophoc[0]['yeucau'];
			$arr_new[0]['lienhe'] = $lophoc[0]['lienhe'];
			//$arr_new[0]['price'] = $sanpham[0]['price'];
			//$arr_new[0]['number'] = 1;
	
			$this->session->set_userdata("chitietlophoc",$arr_new);
		}
		
		
		redirect(base_url('handling/chitietlophoc'));
	}
	public function chitietlophoc()
	{
		$data['chitietlophoc'] = $this->session->userdata("chitietlophoc");
	
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/chitietlophoc',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function filter()
	{

		 $frm = $this->input->post('check_mon');
		$query = "select * from lophoc where hidden = 0 and (";
		 for ($i=0; $i < count($frm); $i++) { 
		 	if($i == count($frm)-1)
			{
		 		$query .= " id_mon = '".$frm[$i]."')";
		 	}	
		 	else
		 	{
		 		//$query .= " id_mon = ".$frm[$i]." OR ";
		 	} 
		 }	
		 $data['check'] = $frm;

		// ở đây có mon hoc
		 $data['dsgiasu']= $this->M_data->load_limit('*','giasutieubieu',array('hidden' => 0),'create_at',3);
		$data['monhoc'] = $this->M_data->load_limit('*','monhoc',array('hidden' => 0),'create_at',3);
		$data['lophoc'] = $this->M_data->filter($query);
		$data['bangiags'] = $this->M_data->load_limit('*','banggiags',array('hidden' => 0),'create_at',3);

		//$data['banner'] = $this->M_data->load_data('*','banner',array('hidden' => 0));
		//$danhdau['trangchu'] = 'active'; 
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function filter2()
	{
		 $frm = $this->input->post('check_lop');
		$query = "select * from lophoc where hidden = 0 and (";
		 for ($i=0; $i < count($frm); $i++) { 
		 	if($i == count($frm)-1)
			{
		 		$query .= " id_lophoc = '".$frm[$i]."')";
		 	}	
		 	else
		 	{
		 		//$query .= " id_mon = ".$frm[$i]." OR ";
		 	} 
		 }	
		 $data['check'] = $frm;

		// ở đây có mon hoc
		 $data['dsgiasu']= $this->M_data->load_limit('*','giasutieubieu',array('hidden' => 0),'create_at',3);
		 $data['bangiags'] = $this->M_data->load_limit('*','banggiags',array('hidden' => 0),'create_at',3);
		$data['lop'] = $this->M_data->load_limit('*','lop',array('hidden' => 0),'create_at',3);
		$data['lophoc'] = $this->M_data->filter($query);

		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	// public function remove_ss()
	// {
	// 	$this->session->unset_userdata("chitietlophoc");
	// 	$this->session->unset_userdata("giasudachon");

	// }
	public function remove_ss()
	{
		//$this->session->unset_userdata("chitietlophoc");
		$this->session->unset_userdata("giasudachon");
		redirect(base_url('handling/giasudachon'));
		echo "<script> window.location.href = '../';</script>";


	}


	public function datgiasu($id = '')
	{
		

		$giasutieubieu= $this->M_data->load_limit('*','giasutieubieu',array('id' => $id),'create_at',3);
		if($this->session->has_userdata('giasudachon'))
		{
			$arr_old = $this->session->userdata("giasudachon");
			$arr_new['id'] = $giasutieubieu[0]['id'];
			$arr_new['fullname'] = $giasutieubieu[0]['fullname'];
			$arr_new['namsinh'] = $giasutieubieu[0]['namsinh'];
			$arr_new['image'] = $giasutieubieu[0]['image'];
			/*$arr_new['lopday'] = $lophoc[0]['lopday'];
			$arr_new['diachi'] = $lophoc[0]['diachi'];
			$arr_new['luong'] = $lophoc[0]['luong'];
			$arr_new['sobuoi'] = $lophoc[0]['sobuoi'];
			$arr_new['thoigian'] = $lophoc[0]['thoigian'];
			$arr_new['thongtin'] = $lophoc[0]['thongtin'];
			$arr_new['yeucau'] = $lophoc[0]['yeucau'];
			$arr_new['lienhe'] = $lophoc[0]['lienhe'];*/
			array_push($arr_old, $arr_new);
			$this->session->set_userdata("giasudachon",$arr_old);
		}
		else
		{
			$arr_new[0]['id'] = $id;
			$arr_new[0]['fullname'] = $giasutieubieu[0]['fullname'];
			$arr_new[0]['namsinh'] = $giasutieubieu[0]['namsinh'];
			$arr_new[0]['image'] = $giasutieubieu[0]['image'];
			/*$arr_new[0]['lopday'] = $lophoc[0]['lopday'];
			$arr_new[0]['diachi'] = $lophoc[0]['diachi'];
			$arr_new[0]['luong'] = $lophoc[0]['luong'];
			$arr_new[0]['sobuoi'] = $lophoc[0]['sobuoi'];
			$arr_new[0]['thoigian'] = $lophoc[0]['thoigian'];
			$arr_new[0]['thongtin'] = $lophoc[0]['thongtin'];
			$arr_new[0]['yeucau'] = $lophoc[0]['yeucau'];
			$arr_new[0]['lienhe'] = $lophoc[0]['lienhe'];
			//$arr_new[0]['price'] = $sanpham[0]['price'];
			//$arr_new[0]['number'] = 1;*/
	
			$this->session->set_userdata("giasudachon",$arr_new);
		}

		redirect(base_url('handling/giasudachon'));
	}
	public function dangkynhanh()
	{
		$frm = $this->input->post();
		$data['phone'] = $frm['phone'];
		$data['id_lop'] = $frm['id_lop'];
		$data['chuyenkhoan'] = $frm['chuyenkhoan'];
		$data['thoigian_ngay'] = $frm['thoigian_ngay'];
		$data['thoigian_gio'] = $frm['thoigian_gio'];
		$data['noi_dung'] = $frm['noi_dung'];
		$this->M_data->insert('dangkynhanh',$data);
		echo "<script> alert('Bạn đã đăng ký thành công!'); </script>";
		echo "<script> window.location.href = '../';</script>";


	}
	public function giasudachon()
	{
		$data['giasudachon'] = $this->session->userdata("giasudachon");
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/giasudachon',$data,TRUE);
		$this->load->view('home/master',$giaodien);

	}
	// public function searchname()
	// {
	// 	$searchname = $this->input->get('timkiem');
	// 	$danhdau['searchname'] = $searchname;
	// 	// $query = "SELECT * FROM sanpham WHERE MATCH ('name') AGAINST ('".$searchname."' IN BOOLEAN MODE)";
	// 	$query = "select * from lophoc where name like '%".$searchname."%'";
	// 	//$data['hanghieu'] = $this->M_data->load_data('*','hang',array('hidden' => 0));
	// 	$data['lophocmoi'] = $this->M_data->filter($query);

	// 	$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
	// 	$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
	// 	$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE);
	// 	$this->load->view('home/master',$giaodien);
	// }
	/*public function tintuc()
	{
		$danhdau['tintuc'] = 'active';
		$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/tintuc',NULL,TRUE);
		$this->load->view('home/master',$giaodien);	
	}
	public function chitietsanpham($id = '')
	{
		$data['sanpham'] = $this->M_data->load_data('*','sanpham',array('id' => $id));
		$danhdau['trangchu'] = 'active'; 
		$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/chitietsanpham',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function datthem($id = '')
	{
		$sanpham = $this->M_data->load_data('*','sanpham',array('id' => $id));
		
		if($this->session->has_userdata('giohang'))
		{
			$arr_old = $this->session->userdata("giohang");
			$arr_new['id'] = $id;
			$arr_new['name'] = $sanpham[0]['name'];
			$arr_new['price'] = $sanpham[0]['price'];
			$arr_new['number'] = 1;
			array_push($arr_old, $arr_new);
			$this->session->set_userdata("giohang",$arr_old);
		}
		else
		{
			$arr_new[0]['id'] = $id;
			$arr_new[0]['name'] = $sanpham[0]['name'];
			$arr_new[0]['price'] = $sanpham[0]['price'];
			$arr_new[0]['number'] = 1;
	
			$this->session->set_userdata("giohang",$arr_new);
		}
		
		
		redirect(base_url('handling/giohang'));
	}
	public function giohang()
	{
		$data['giohang'] = $this->session->userdata("giohang");
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/giohang',$data,TRUE);
		$this->load->view('home/master',$giaodien);	
		// $this->session->unset_userdata("giohang");
	}
	public function remove_dt()
	{
		$id = $this->input->post('id');	
		$arr_old = $this->session->userdata("giohang");
		for ($i=0; $i < count($arr_old); $i++) { 
			if($arr_old[$i]['id'] == $id)
			{
				unset($arr_old[$i]);
			}
		}
		$arr_old = array_values($arr_old);
		$this->session->set_userdata("giohang",$arr_old);
		
		$tongtien = 0;
		for ($i=0; $i < count($arr_old); $i++) { 
			$tongtien += $arr_old[$i]['price']*$arr_old[$i]['number'];
		}
		echo $tongtien;
	}
	public function filter()
	{
		$frm = $this->input->post('check_hang');
		$query = "select * from sanpham where hidden = 0 and (";
		for ($i=0; $i < count($frm); $i++) { 
			if($i == count($frm)-1)
			{
				$query .= " id_hang = ".$frm[$i].")";
			}	
			else
			{
				$query .= " id_hang = ".$frm[$i]." OR ";
			} 
		}	
		$data['check'] = $frm;
		$data['hanghieu'] = $this->M_data->load_data('*','hang',array('hidden' => 0));
		$data['sanphammoi'] = $this->M_data->filter($query);

		$data['banner'] = $this->M_data->load_data('*','banner',array('hidden' => 0));
		$danhdau['trangchu'] = 'active'; 
		$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function searchname()
	{
		$searchname = $this->input->get('timkiem');
		$danhdau['searchname'] = $searchname;
		// $query = "SELECT * FROM sanpham WHERE MATCH ('name') AGAINST ('".$searchname."' IN BOOLEAN MODE)";
		$query = "select * from sanpham where name like '%".$searchname."%'";
		$data['hanghieu'] = $this->M_data->load_data('*','hang',array('hidden' => 0));
		$data['sanphammoi'] = $this->M_data->filter($query);

		$data['banner'] = $this->M_data->load_data('*','banner',array('hidden' => 0));
		$danhdau['trangchu'] = 'active'; 
		$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function muahang()
	{
		$frm = $this->input->post();
		$data['name'] = $frm['name'];
		$data['address'] = $frm['address'];
		$data['phone'] = $frm['phone'];
		$data2['id_hoadon'] = $this->M_data->insert('hoadon',$data);
		$giohang = $this->session->userdata("giohang");
		for($i = 0; $i < count($giohang); $i++)
		{
			$data2['id_sanpham'] = $giohang[$i]['id'];
			$data2['number'] = $giohang[$i]['number'];
			$data2['price'] = $giohang[$i]['price'];
			$this->M_data->insert('chitiethoadon',$data2);
		}
		$this->session->unset_userdata("giohang");
		echo "<script> alert('Bạn đã mua hàng thành công!'); </script>";
		echo "<script> window.location.href = '../';</script>";
		
	}*/

}
?>