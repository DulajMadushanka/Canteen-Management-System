<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Charts2 extends CI_Controller {




    /**
     * @desc: This method is used to load view
     */
     function index1()
    {
      $this->load->model('databaser');
      $data1 = array(
        'curry' => $this->databaser->getdata1(),
        'drinks' => $this->databaser->getdata2(),
        'fastfoods' => $this->databaser->getdata3(),
        'fruits' => $this->databaser->getdata4(),
        'kottu' => $this->databaser->getdata5(),
        'otherfoods' => $this->databaser->getdata6(),
        'rices' => $this->databaser->getdata7()
      );
    



         $this->load->view('menus/management-canteen',$data1);

    }

function index2(){
    $this->load->model('databaser');
    $data1 = array(
      'curry' => $this->databaser->getdata1(),
      'drinks' => $this->databaser->getdata2(),
      'fastfoods' => $this->databaser->getdata3(),
      'fruits' => $this->databaser->getdata4(),
      'kottu' => $this->databaser->getdata5(),
      'otherfoods' => $this->databaser->getdata6(),
      'rices' => $this->databaser->getdata7()
    );

        $this->load->view('menus/art-canteen',$data1);

}

function index3(){
    $this->load->model('databaser');
    $data1 = array(
      'curry' => $this->databaser->getdata1(),
      'drinks' => $this->databaser->getdata2(),
      'fastfoods' => $this->databaser->getdata3(),
      'fruits' => $this->databaser->getdata4(),
      'kottu' => $this->databaser->getdata5(),
      'otherfoods' => $this->databaser->getdata6(),
      'rices' => $this->databaser->getdata7()
    );

        $this->load->view('menus/law-canteen',$data1);

}
function index4(){
    $this->load->model('databaser');
    $data1 = array(
      'curry' => $this->databaser->getdata1(),
      'drinks' => $this->databaser->getdata2(),
      'fastfoods' => $this->databaser->getdata3(),
      'fruits' => $this->databaser->getdata4(),
      'kottu' => $this->databaser->getdata5(),
      'otherfoods' => $this->databaser->getdata6(),
      'rices' => $this->databaser->getdata7()
    );

        $this->load->view('menus/ucsc-canteen',$data1);

}

function index5(){
    $this->load->model('databaser');
    $data1 = array(
      'curry' => $this->databaser->getdata1(),
      'drinks' => $this->databaser->getdata2(),
      'fastfoods' => $this->databaser->getdata3(),
      'fruits' => $this->databaser->getdata4(),
      'kottu' => $this->databaser->getdata5(),
      'otherfoods' => $this->databaser->getdata6(),
      'rices' => $this->databaser->getdata7()
    );

        $this->load->view('menus/open-canteen',$data1);

}




  }
