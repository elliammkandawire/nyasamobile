<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Vacancies extends BaseController {
	private $table="careers";
	public function index()
	{
		$data["data"]=$this->readData($this->table);
		$data["title"]="vacancies";
		$this->addWebsiteHeader("pages/vacancies",$data);
	}

	public function details($slug=null){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="vacancy_details";
		$this->addWebsiteHeader("pages/vacancy-details",$data);
	}
}
