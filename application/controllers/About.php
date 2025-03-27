<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('header',array('title'=>'Welcome to Kedium!'));
		$this->load->view('about/about');
		$this->load->view('footer');

	}
}
