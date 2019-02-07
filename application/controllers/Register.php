<?php 

	class Register extends CI_Controller{

		public function registerUser(){

			$this->form_validation->set_rules('uname', 'User Name', 'trim|required|min_length[5]|max_length[20]|is_unique[users.uname]');
			$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[5]|max_length[40]');
			$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[5]|max_length[40]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('bday', 'Birth Day', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]|max_length[200]');
			$this->form_validation->set_rules('pnum', 'Phon number', 'trim|required|max_length[10]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[25]');


			 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('location/Register');
                }
                else
                {
                        $this->load->model('model_user');
                        $response = $this->model_user->insertUserData();
                        if ($response) {
                        	$this->session->set_flashdata('msg','Registered successfully...');
                        	redirect('Home/Register');
                        } else{
                        	$this->session->set_flashdata('msg','Somthing went wrong...');
                        	redirect('Home/Register');
                        }
                }

		}
	}

 ?>
