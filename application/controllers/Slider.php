<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Slider extends BaseController {
	private $table="slider";
	private $admin_url="slider";
	public function index()
	{
		$data["data"]=$this->readDataWithOrder($this->table,"position","ASC");
		$data["title"]="data";
		$this->addDashboardHeaderAndFooterAndMenu("dashboard/dashboard_slider",$data);
	}

	public function details($slug=null){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="member_details";
		$this->addWebsiteHeader("pages/member-details",$data);
	}

	public function get_slider_details($slug){
		echo json_encode($this->get_details($this->table,"slug", $slug)[0]);
		return json_encode($this->get_details($this->table,"slug", $slug)[0]);
	}

	public function add(){
		$this->checkIfLoggedIn();
		$data=array(
			"slug"=>$this->removeHtmlTags($this->url($this->input->post("title")).date("yyyyMMddHs")),
			"title"=>$this->removeHtmlTags($this->input->post("title")),
			"description"=>nl2br($this->input->post("description")),
			"picture"=>$this->removeHtmlTags($this->input->post("current_picture"))
		);

		/*check if picture is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/backgrounds","picture")['upload_data']['file_name'];
			$data['picture']=$file_name;
		}
		$this->insert($this->table,$data);
		$_SESSION['message']="Record Added successfully";
		redirect($this->admin_url);
	}

	public function update_slider(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=array(
			"slug"=>$this->removeHtmlTags($this->input->post("slug")),
			"title"=>$this->removeHtmlTags($this->input->post("title")),
			"content"=>nl2br($this->input->post("content")),
			"picture"=>$this->removeHtmlTags($this->input->post("current_picture"))
		);

		/*check if picture is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/slider","picture")['upload_data']['file_name'];
			$data['picture']=$file_name;
		}

		//echo json_encode($data);exit;
		$this->update($this->table,$data);
		$_SESSION['message']="Record Updated successfully";
		redirect($this->admin_url);
	}
}
