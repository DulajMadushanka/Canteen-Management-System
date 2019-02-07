<?php

	class model_user extends CI_Model{

		function insertUserData(){
			$data = array(
				'uname' =>$this->input->post('uname',TRUE),
				'fname' =>$this->input->post('fname',TRUE),
				'lname' =>$this->input->post('lname',TRUE),
				'email' =>$this->input->post('email',TRUE),
				'birthday' =>$this->input->post('bday',TRUE),
				'address' =>$this->input->post('address',TRUE),
				'phonnum' =>$this->input->post('pnum',TRUE),
				'password' =>$this->input->post('password',TRUE),
			);

			return $this->db->insert('users',$data);

		}

		function loginUser(){
			$uname = $this->input->post('uname');
			$password = sha1($this->input->post('password'));

			$this->db->where('uname',$uname);
			$this->db->where('password',$password);

			$respond = $this->db->get('users');

			if ($respond->num_rows()==1) {
				return $respond->row(0);

			}else{
				return false;

			}
		}

	}

 ?>
