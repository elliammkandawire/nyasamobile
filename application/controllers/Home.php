<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Home extends BaseController {
	private $table="company";
	public function index()
	{
		$this->addWebsiteHeader("pages/index",null);
	}

	public function aboutUs(){
		$data["data"]=$this->readDataWithOrder("team","display_position","asc");
		$data["title"]="teams";
		$this->addWebsiteHeader("pages/about",$data);
    }

	public function dashboard(){
		$this->checkIfLoggedIn();
		$this->addDashboardHeaderAndFooterAndMenu('dashboard/dashboard', null);
	}

	public function update_company_details(){
		$this->checkIfLoggedIn();
		$this->addDashboardHeaderAndFooterAndMenu('dashboard/update_company_details', null);
	}

	public function update_company(){
		$this->checkIfLoggedIn();
		$data=array(
			"slug"=>$this->input->post("slug"),
			"shortname"=>$this->input->post("shortname"),
			"fullname"=>$this->input->post("fullname"),
			"email"=>$this->input->post("email"),
			"location"=>$this->input->post("location"),
			"logo"=>$this->input->post("current_logo"),
			"mission"=>nl2br($this->input->post("mission")),
			"motto"=>nl2br($this->input->post("motto")),
			"vision"=>nl2br($this->input->post("vision")),
			"background"=>nl2br($this->input->post("background")),
			"twitter"=>$this->input->post("twitter"),
			"facebook"=>$this->input->post("facebook"),
			"postal_address"=>nl2br($this->input->post("postal_address")),
			"phone"=>$this->input->post("phone"),
			"about_picture"=>$this->input->post("about_picture"),
			"map_src"=>$this->input->post("map_src"),
			"instagram"=>nl2br($this->input->post("instagram")),
			"about_picture"=>$this->input->post("current_about_picture"),
			"youtube"=>$this->input->post("youtube")
		);
		/*check if logo is empty*/
		if ($_FILES['logo']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/logo","logo")['upload_data']['file_name'];
			$data['logo']=$file_name;
		}

		/*check if logo is empty*/
		if ($_FILES['about_picture']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/about","header")['upload_data']['file_name'];
			$data['about_picture']=$file_name;
		}

		$this->update($this->table,$data);
		$_SESSION['message']="Record inserted successfully";
		redirect("dashboard");
	}
}
