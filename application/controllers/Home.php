<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('location/Login');
	}

	public function login()
	{
		$this->load->view('location/Login');
	}

	public function register()
	{
		$this->load->view('location/Register');
	}




}
