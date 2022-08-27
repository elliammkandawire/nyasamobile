<?php
class Users_model extends CI_Model {
	private $table="users";
	function __construct(){
		parent::__construct();
	}

	public function login($email, $password){
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		return $this->db->get()->result();
	}
}
?>
