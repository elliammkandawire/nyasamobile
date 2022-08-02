<?php
class Data_model extends CI_Model {
	private $table="company";
	function __construct(){
		parent::__construct();
	}
	public function company_data(){
		$this->db->select("*");
		$this->db->from($this->table);
		return $this->db->get()->result();
	}

	public function update($table,$data){
		$this->db->replace($table,$data);
	}

	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function delete($table,$column_name, $colum_value){
		$this->db->where($column_name, $colum_value);
		$this->db->delete($table);
	}

	public function get_details($table_name,$column_name, $column_value){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->where($column_name, $column_value);
		return $this->db->get()->result();
	}

	public function paginated($table_name, $offset, $size){
		$sql="Select * from $table_name LIMIT $offset, $size";
		$query = $this->db->query($sql);
		return json_encode($query->result_array());
	}

	public function no_of_pages($table_name, $size){
		$sql="SELECT CEILING(count(*)/$size) as pages FROM $table_name";
		$query = $this->db->query($sql);
		return json_encode($query->result_array());
	}

	public function selectFewElements($table_name,$order_column_name, $order_column_value, $size){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->order_by($order_column_name, $order_column_value);
		$this->db->limit($size);
		return $this->db->get()->result();
	}

	public function getNextOrPrev($table_name,$column_name, $column_value,$order_by, $order_value){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->where("$column_name >", $column_value);
		$this->db->order_by($order_by, $order_value);
		return $this->db->get()->result();
	}
	public function readData($table_name){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->order_by("date", "DESC");
		$this->db->where("status", true);
		return $this->db->get()->result();
	}

	public function readWithConditions($table_name,$column_name, $column_value){
		$this->db->select("*");
		$this->db->from($table_name);
		if($column_value!="all"){
			$this->db->where($column_name, $column_value);
		}
		return $this->db->get()->result();
	}
	public function customOrder($table_name, $column_name, $column_value){
	$this->db->select("*");
	$this->db->from($table_name);
	$this->db->order_by($column_name, $column_value);
	$this->db->where("status", true);
	return $this->db->get()->result();
  }
}
