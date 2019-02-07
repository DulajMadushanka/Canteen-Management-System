<?php


class model_contacts extends CI_Model {

	function insertcontactdata(){
            $data = array(
                
                'fname' => $this -> input -> post('fname',TRUE),
                'lname' => $this -> input -> post('lname',TRUE),
                'email' => $this -> input -> post('email',TRUE),
                'subject' => $this -> input -> post('subject',TRUE),
                'tmsg' => $this -> input -> post('tmsg',TRUE)
                
            );
            
            $this->db->insert('contacts',$data);
	} 

}