<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Partners extends BaseController {
	private $table="parteners";
	public function index()
	{
		$category=$this->input->get("category");
		if($category==null){
			$category="all";
		}
		$data["data"]=$this->_group_by(json_decode(json_encode($this->readWithConditions($this->table,"category",$category)),true),"category");
		$data["title"]="partners";
		$this->addWebsiteHeader("pages/partners",$data);
	}

	function _group_by($array, $key) {
		$return = array();
		foreach($array as $val) {
			$return[$val[$key]][] = $val;
		}
		return $return;
	}
}
