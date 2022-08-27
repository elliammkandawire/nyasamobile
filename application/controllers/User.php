<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");
class User extends BaseController {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
//        $this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->library('email');
	}

	public function index(){
		//load session library
		$this->load->library('session');

		if($this->session->userdata('user')){
			if($this->session->userdata('role')==1){
				redirect("dashboard");
			}else{
				redirect("dashboard");
			}
		}
		else{
			$this->load->view('dashboard/login');
		}
	}

	public function login(){
		//load session library
		$this->load->library('session');

		$email = $_POST['email'];
		$password = $this->clean(sha1($_POST['password']));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'password', 'required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules(  'password', 'Password', 'trim|required|min_length[6]|max_length[15]|callback_chk_password_expression');

		//echo $this->form_validation->run(); exit;
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error','Validation Errors');
			$this->addDashboardHeaderAndFooter('dashboard/login', null);
		}
		else {
			$data = $this->users_model->login($email, $password);
			if($data){
				$data=$data[0];
				$this->session->set_userdata('user', $data->email);
				$this->session->set_userdata('fname', $data->fname);
				$this->session->set_userdata('role', $data->role);
				$this->session->set_userdata('logged_in', true);
				redirect("dashboard");
			}
			else{
				//header('location:'.$this->index());
				$this->session->set_flashdata('error','Invalid login. User not found');
				$this->addDashboardHeaderAndFooter('dashboard/login', null);
			}
		}
	}

	public function chk_password_expression($str): bool

	{

		if (1 !== preg_match("/^.*(?=.{6,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $str))

		{
			$this->form_validation->set_message('chk_password_expression', '%s must be at least 6 characters and must contain at least one lower case letter, one upper case letter and one digit');
			return FALSE;
		}

		else

		{
			return TRUE;
		}
	}

	public function home(){
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if($this->session->userdata('user') && $this->session->userdata('user')!=""){
			$this->load->view('home');
		}
		else{
			redirect('login');
		}

	}

	public function signin(){
		$this->addDashboardHeaderAndFooter('dashboard/login', null);
    }

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('logged_in');
		redirect('/');
	}

}
