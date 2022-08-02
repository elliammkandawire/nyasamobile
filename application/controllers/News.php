<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class News extends BaseController {
	private $table="news";
	public function index()
	{
		$page=$this->input->get("page");
		if($this->input->get("page")==null){
			$page=0;
		}
		$data["data"]=array("content"=>$this->new_paginated($this->table,$page,10), "totalPages"=>$this->no_of_pages($this->table,10));
		$data["title"]="news";
		$this->addWebsiteHeader("pages/news",$data);
	}

	public function details($slug=null){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="news_details";
		$this->addWebsiteHeader("pages/news-details",$data);
	}
}
