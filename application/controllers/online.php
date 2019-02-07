<?php


class online extends CI_Controller{


      public function register(){
        $this->load->view('menus/register');

    }
    public function form_validation(){
      $this->load->library('form_validation');
      $this->form_validation->set_rules("first_name","First Name",'required|alpha');
      $this->form_validation->set_rules("last_name","Last Name",'required|alpha');
      $this->form_validation->set_rules("address","Address",'required|alpha');

      if($this->form_validation->run()){
        $this->load->model("Register_model");
        $data=array(
          "first_name" =>$this->input->post("first_name"),
          "last_name" =>$this->input->post("last_name"),
          "contact_no" =>$this->input->post("contact_no"),
          "address" =>$this->input->post("address"),
          "type" =>$this->input->post("type"),
          "food_item" =>$this->input->post("foodsitem"),
          "price" =>$this->input->post("price"),
          "day" =>$this->input->post("day"),
          "daypicker" =>$this->input->post("date_picker"),
          "timepicker" =>$this->input->post("time_picker"),
        );
        $this->Register_model->insert_data($data);
        redirect(base_url()."index.php/online/inserted");
      }
      else{
        $this->form_validation();
      }

    }


    public function inserted(){
      $this->register();
    }
    public function isempty(){



    if($_POST['sudu']==null && $_POST['rathu']==null && $_POST['kiri']==null && $_POST['dhal']==null && $_POST['fish']==null && $_POST['leese']==null && $_POST['hop']==null && $_POST['shop']==null && $_POST['para']==null && $_POST['thos']==null && $_POST['eroti']==null && $_POST['noold']==null){
    echo"Insert Your Foods Deatails";
    $this->session->set_flashdata('a','Please Insert Your Foods Details ');

      redirect('Menu/breakf');
    }
    else{
      $sudukakulu=$_POST['sudu'];
      $rathukakulu=$_POST['rathu'];
      $kirihodi=$_POST['kiri']; $dhalcurry=$_POST['dhal']; $fishcurry=$_POST['fish'];  $leesecurry=$_POST['leese'];  $hoppers=$_POST['hop'];  $stringhoppers=$_POST['shop'];  $parata=$_POST['para']; $those=$_POST['thos'];  $eggroti=$_POST['eroti'];  $noodles=$_POST['noold'];

  $this->load->view('menus/register',$_POST);

  }


  }


    }





?>
