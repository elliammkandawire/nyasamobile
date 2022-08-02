<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Team extends BaseController {
	private $table="team";
	public function index()
	{
		$data["data"]=$this->customerOrder($this->table,"display_position","asc");
		$data["title"]="teams";
		$this->addWebsiteHeader("pages/team",$data);
	}
}
