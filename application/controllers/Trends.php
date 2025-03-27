<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trends extends CI_Controller {

	public function index()
	{
		$this->load->view('header',array('title'=>'Welcome to Kedium!'));
		$this->load->view('trends/trends');
		$this->load->view('footer');

	}
}
