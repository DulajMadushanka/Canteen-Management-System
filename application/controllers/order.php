<?php


class order extends CI_Controller{



  public function register(){

    if(isset($_POST['menus/breakfast'])){
    $this->form_validation->set_rules('username','Username','required');
$this->form_validation->set_rules('address','Address','required');
$this->form_validation->set_rules('order','Order','required');
    $this->form_validation->set_rules('email','Email','required');
   // $this->form_validation->set_rules('password','Password','required|min_length[5]|matches[password]');
   // $this->form_validation->set_rules('password','Confirm Password','required|min_length[5]|matches[password]');
    $this->form_validation->set_rules('phone','Phone','required|min_length[5]');

    //if form validation true

    if ($this->form_validation->run() == TRUE){
        echo'form validated';

        //add user in database

        $data = array(
            'username' => $_POST['username'],
'address' => $_POST['address'],
'order' => $_POST['order'],
            'email' => $_POST['email'],

            'gender' => $_POST['gender'],
            'created_date' => date('Y-m-d'),
            'phone' => $_POST['phone'],


        );


        $this->db->insert('use',$data);

        $this->session->set_flashdata("success","Your order has been registerd");
        //redirect("menus/register","refresh");

     }


    }

        $this->load->view('menus/breakfast');
    }


    }





?>
