<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Partners extends BaseController {
	private $table="parteners";
	public $per_page=8;
	public $pagenation=array('8',"10","20","50","100","all");
	private $admin_url="partners_admin";
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

	public function get_member_details($slug){
		echo json_encode($this->get_details($this->table,"slug", $slug)[0]);
		return json_encode($this->get_details($this->table,"slug", $slug)[0]);
	}

	public function admin_dashboard(){
		$ref=null;
		if(isset($_GET['page'])){
			$ref=$this->input->post("edit_slug");
		}
		if($this->check_if_logged_in()){
			$this->load_page_content($ref);
		}else{
			redirect("login","reflesh");
		}
	}

	public function load_page_content($ref){
		$this->getData($ref);
		$this->data['pagenation']=$this->pagenation;
		$this->data['partners']=$this->readData("partners_category");
		$this->load->view('dashboard/dashboard_header',$this->data);
		$this->load->view('dashboard/dashboard_members');
		$this->load->view('dashboard/dashboard_footer');
	}

	public function getData($ref){
		$all_data=$this->readDataWithOrder($this->table,"name","ASC");
		$this->data['data']=array_slice($all_data, 0,$this->per_page);
		$this->data['page']=$this->per_page;
		if($ref!=null && $ref!="all"){
			$this->data['data']=array_slice($all_data, 0,$ref);
			$this->data['page']=$ref;
		}else if($ref=="all"){
			$this->data['data']=$all_data;
			$this->data['page']=$ref;
		}
	}
	public function delete($slug){
		$this->data_model->delete($this->table,"slug",$slug);
		echo true;
	}
	public function addMember(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=$this->addDefaultData();
		$data['slug']=$this->removeHtmlTags($this->url($this->input->post("name")).date("yyyyMMddHs"));

		//echo json_encode($data);exit;
		$this->insert($this->table,$data);
		$_SESSION['message']="Record Updated successfully";
		redirect($this->admin_url);
	}
	public function addDefaultData(){
		$data=array(
			"name"=>$this->removeHtmlTags($this->input->post("name")),
			"logo"=>$this->removeHtmlTags($this->input->post("current_picture")),
			"category"=>$this->removeHtmlTags($this->input->post("partner_group")),
			"website"=>$this->removeHtmlTags(nl2br($this->input->post("website")))
		);

		/*check if picture is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("assets/images/parterners/","picture")['upload_data']['file_name'];
			$data['logo']=$file_name;
		}

		return $data;
	}

	public function updateMember(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=$this->addDefaultData();
		$data['slug']=$this->removeHtmlTags($this->input->post("slug"));


		//echo json_encode($data);exit;
		$this->update($this->table,$data);
		$_SESSION['message']="Record Updated successfully";
		redirect($this->admin_url);
	}
}
