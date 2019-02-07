<?php



 class Register_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }
    function test_main(){
      echo"this is model function";
    }
    function insert_data($data){
      $this->db->insert("reg",$data);
    }
 }



?>
