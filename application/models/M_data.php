<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function load_data($select,$table,$where)
	{
		$result = $this->db->select($select)->from($table)->where($where)->get();
		return $result->result_array();
	}
	public function load_limit($select,$table,$where,$order,$limit)
	{
		$result = $this->db->select($select)->from($table)->where($where)->order_by($order,'desc')->limit($limit)->get();
		return $result->result_array();
	}
	public function filter($string)
	{
		$result = $this->db->query($string);
		return $result->result_array();
	}
	public function insert($table,$data)
	{
		$id = $this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	public function update($table,$data,$where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function delete($table,$id)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);

	}
	
}
?>