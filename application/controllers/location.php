<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class location extends CI_Controller {

	public function locatemenu()
	{
		$this->load->view('locationmenu/homepage');
	}
}

?>
