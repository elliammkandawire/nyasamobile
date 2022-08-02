<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Contact extends BaseController {
	public function index()
	{
		$this->addWebsiteHeader("pages/contact",null);
	}
}
