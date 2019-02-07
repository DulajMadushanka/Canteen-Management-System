<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function dash()
	{
		$this->load->view('menus/menu');
	}

	

	public function breakf()
	{
		$this->load->view('menus/breakfast');
	}


	public function lunf()
	{
		$this->load->view('menus/lunch');
	}


	public function dinn()
	{
		$this->load->view('menus/dinner');
	}

	public function login()
	{
		$this->load->view('menus/Register');
	}













}

?>
