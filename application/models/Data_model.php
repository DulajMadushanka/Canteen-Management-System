<?php

class Data_model extends CI_Model {

    /**
     * @desc load  db
     */
    function __construct() {
        parent::__Construct();
        $this->db = $this->load->database('default', TRUE, TRUE);
    }

    /**
     * @desc: Get data from company_performance table
     * @return: Array()
     */
    function getdata($month){

      //die();
        $this->db->select_sum('price');
          $this->db->select('week');
         $this->db->where('month', $month);
          $this->db->group_by("week");

        $query = $this->db->get('company_performance');
        return $query->result_array();


    }

    function getdata2($month){

      //die();

      $this->db->select_sum('price');
        $this->db->select('week');
       $this->db->where('month', $month);
        $this->db->group_by("week");



        $query = $this->db->get('company_performance');
        return $query->result_array();


    }


}










 ?>
