<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getOrders($parameters = array())
    {
        $query = $this->db->get("orders");
        $query = $query->result_array();
        if (isset($parameters['list']) && $parameters['list'] == true)
        {
            $query = $this->formatList($query);
        }
        return $query;
    }
    private function formatList($target = array())
    {
        foreach($target as $value){
            $id = $value['id'];
            $result[$id] = $value;
        }
        $target = $result;
        return $target;
    }

    public function addOrder($data = array())
    {
        if(!isset($data)){return false;}
        $this->db->insert("orders", $data);
        return $this->db->insert_id();
    }
}