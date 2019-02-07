<?php 
	class login extends CI_Controller{

		public function loginUser(){
		
			$this->form_validation->set_rules('uname', 'User Name', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');


			if ($this->form_validation->run() == FALSE)
                {

                        $this->load->view('location/Login');
                }
                else
                {
                        $this->load->model('model_user');
                        $result = $this->model_user->loginUser();

                        if ($result != false) {
                        	
                        	$user_data = array(
                        		'user_id' => $result->id,
                        		'uname' => $result->uname,
                        		'fname' => $result->fName,
                        		'lname' => $result->lName,
                        		'email' => $result->email,
                        		'loggedin' => TRUE

                        		);
                        	$this->session->set_userdata($user_data);
                        	$this->session->set_flashdata('wellcome','Wellcome Back...');
                        	redirect('User/index');

                        }else{
                        	$this->session->set_flashdata('msgs','Password or User Name is Wrong');
                        	redirect('Home/Login');
                        }
                }

		}

                public function logoutUser(){
                        
                        $this->session->unset_userdata('user_id');
                        $this->session->unset_userdata('uname');
                        $this->session->unset_userdata('fname');
                        $this->session->unset_userdata('lname');
                        $this->session->unset_userdata('email');
                        $this->session->unset_userdata('loggedin');

                        redirect('Home/login');
                }

	}
 ?>