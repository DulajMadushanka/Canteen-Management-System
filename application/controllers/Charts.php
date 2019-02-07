<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Charts extends CI_Controller {

    function __Construct() {
        parent::__Construct();

        $this->load->helper(array('form', 'url'));
        $this->load->model('data_model');

    }
  
    public function index1()
    {


        $this->load->view('barchart');

    }

    public function index2()
    {

        $this->load->view('piechart');
    }


    function getdata($month){
        $data  = $this->data_model->getdata($month);
        print_r(json_encode($data, true));
    }

    function getdata2($month){
        $data  = $this->data_model->getdata2($month);
        print_r(json_encode($data, true));
    }

  }
