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
	public function paginated($page, $url, $size){
		return json_decode($this->data_model->getPagenated(API_URL.$url, $page, $size));
    }
    public function readData($table){
		return $this->data_model->readData($table);
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
