<?php

class databaser extends CI_Model {

    function getdata1(){
        $this->db->select('foods,price');
        $query = $this->db->get('curries');
        return $query->result_array();
    }
    function getdata2(){
        $this->db->select('foods,price');
        $query = $this->db->get('drinks');
        return $query->result_array();
    }
    function getdata3(){
        $this->db->select('foods,price');
        $query = $this->db->get('fastfoods');
        return $query->result_array();
    }
    function getdata4(){
        $this->db->select('foods,price');
        $query = $this->db->get('fruits');
        return $query->result_array();
    }
    function getdata5(){
        $this->db->select('foods,price');
        $query = $this->db->get('kottu');
        return $query->result_array();
    }
    function getdata6(){
        $this->db->select('foods,price');
        $query = $this->db->get('otherfoods');
        return $query->result_array();
    }
    function getdata7(){
        $this->db->select('foods,price');
        $query = $this->db->get('rices');
        return $query->result_array();
    }




}
