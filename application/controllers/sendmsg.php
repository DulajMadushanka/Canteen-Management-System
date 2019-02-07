<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sendmsg extends CI_Controller {



	public function sendsuccess()
	{

           $this->form_validation->set_rules('fname', 'First name', 'trim|required');
           $this->form_validation->set_rules('lname', 'Last name', 'trim|required');
           $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
           $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
           $this->form_validation->set_rules('tmsg', 'Message', 'trim|required');



           if ($this->form_validation->run() == FALSE)
                {
                       $this->load->view('contact-us');
                }
           else
                {
                        $this->load->model('model_contacts');
                        $this->model_contacts->insertcontactdata();


                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $message = $_POST['tmsg'];
                        $email = $_POST['email'];
                        $subject=$_POST['subject'];

 /**                       $config = Array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'smtp.googlemail.com',
                            'smtp_port' => 587,
                            'smtp_user' => 'rumalkajanith@gmail.com',
                            'smtp_pass' => '30101995',

                        );             **/

                        $this->load->library('email');
                        //$this->email->set_newline("\r\n");

                        $this->email->from($email,$fname);
                        $this->email->to('canteenmanagementuoc@gmail.com');
                        $this->email->subject($subject);
                        $this->email->message($message);
                        $this->email->send();



 /**                       $this->load->library('email');

                        $this->email->from($email, $fname);
                        $this->email->to('rumalkajanith@gmail.com');
                  //        $this->email->cc('another@another-example.com');
                  //        $this->email->bcc('them@their-example.com');

                        $this->email->subject('Receiving email from user');
                        $this->email->message("$message from $email");

                        $this->email->send();    **/


                        $this->load->view('msg_success');



}



	}
}
