<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sendmsg extends CI_Controller {

	public function sendsuccess()
	{
           $this->form_validation->set_rules('fname', 'First name', 'required');
           $this->form_validation->set_rules('lname', 'Last name', 'required');
           $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
           $this->form_validation->set_rules('subject', 'Subject', 'required');
           $this->form_validation->set_rules('tmsg', 'Message', 'required');
           
           
           
           if ($this->form_validation->run() == FALSE)
                {
                       $this->load->view('contact-us1');
                }                   
           else
                {
                        $this->load->model('model_contacts');
                        $this->model_contacts->insertcontactdata();
                        $this->load->view('msg_success');
                }
	}
}
