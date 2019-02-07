<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message'); //load -> view (mengincludekan file view) //load -> model(mengincludekan file model)
	}
}
