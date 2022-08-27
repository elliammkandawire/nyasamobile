<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('data_model');
	}
	public function addWebsiteHeader($page, $additional_data)
	{
		$data["company_data"]=($this->data_model->company_data()[0]);
		$data["sliders"]=($this->readData("slider"));
		$data["partners_category"]=($this->readData("partners_category"));
		$data["latest_news"]=$this->data_model->selectFewElements("news","datetime", "desc", "5");
		$data[$additional_data["title"]]=$additional_data["data"];
		$this->load->view('pages/website_header',$data);
		$this->load->view($page);
		$this->load->view('pages/website_footer');
	}
	public function checkIfLoggedIn(){
		if(!isset($_SESSION['logged_in'])){
			redirect("login");
		}
	}

	public function check_if_logged_in(){
		if($_SESSION['logged_in']){
			return true;
		}else{
			return false;
		}
	}

	public function addDashboardHeaderAndFooter($page, $additional_data){
		//$this->checkIfLoggedIn();
		$data[$additional_data["title"]]=$additional_data["data"];
		$data["company_data"]=($this->data_model->company_data()[0]);
		$this->load->view('dashboard/header',$data);
		$this->load->view($page);
		$this->load->view('dashboard/dashboard_footer');
	}

	public function url($url)
	{
		$url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
		$url = trim($url, "-");
		$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
		$url = strtolower($url);
		$url = preg_replace('~[^-a-z0-9_]+~', '', $url);
		return $url;
	}

	public function addDashboardHeaderAndFooterAndMenu($page, $additional_data){
		$this->checkIfLoggedIn();
		$data[$additional_data["title"]]=$additional_data["data"];
		$data["company_data"]=($this->data_model->company_data()[0]);
		$this->load->view('dashboard/dashboard_header',$data);
		$this->load->view($page);
		$this->load->view('dashboard/dashboard_footer');
		if($page=="dashboard/update_company_details"){
			$this->load->view('dashboard/special_footer');
		}

	}

	public function do_upload($location,$file)
	{
		$config['upload_path']          = $location;
		$config['allowed_types']        = 'pdf|gif|jpg|png|jpeg|mp3|mpeg';
		// $config['max_size']             = 1000;
		// $config['max_width']            = 1600;
		// $config['max_height']           = 768;
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($file))
		{
			$error = array('error' => $this->upload->display_errors());
			return $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			return $data;
		}
	}
	function removeHtmlTags($string){
		return strip_tags($string);
	}
	public function get_details($table_name,$column_name, $column_value){
		return $this->data_model->get_details($table_name,$column_name, $column_value);
	}
	public function paginated($page, $url, $size){
		return json_decode($this->data_model->getPagenated(API_URL.$url, $page, $size));
    }
	public function insert($table,$data){
		$this->data_model->insert($table, $data);
	}
	public function  update($table,$data){
		$this->data_model->update($table, $data);
	}
    public function readData($table){
		return $this->data_model->readData($table);
	}
	public function readDataWithOrder($table_name, $order_by, $order_value){
		return $this->data_model->readDataWithOrder($table_name, $order_by, $order_value);
	}

	public function readWithConditions($table_name,$column_name, $column_value){
		return $this->data_model->readWithConditions($table_name,$column_name, $this->clean($column_value));
	}

	public function customerOrder($table_name, $column_name, $column_value){
		return $this->data_model->customOrder($table_name,$column_name,$this->clean($column_value));
	}

	public function clean($string) {
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}

	public function readSingle($table, $column_name, $column_value){
		return $this->data_model->get_details($table, $column_name, $this->clean($column_value))[0];
	}

	public function no_of_pages($table, $size){
		return $this->data_model->no_of_pages($table, $this->clean($size));
	}

	public function new_paginated($table_name, $page, $size){
		return json_decode($this->data_model->paginated($table_name, $page*$this->clean($size), $this->clean($size)));
	}
}
