<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class NotFound extends BaseController {
	public function index()
	{
		$this->addWebsiteHeader("pages/404",null);
	}
}
