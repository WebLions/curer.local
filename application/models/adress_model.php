<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adress_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function addAdress($data)
    {
       if(!isset($data)){return false;}
       $this->db->insert("adress", $data);
       return $this->db->insert_id();
    }
    public function getAdress($parameters = array())
    {
        if(isset($parameters['ids'])){
            $this->db->where_in('adress', $parameters['ids']);
        }
        if(isset($parameters['contragent_ids'])){
            $this->db->where_in('id_contragent', $parameters['contragent_ids']);
        }

        $query = $this->db->get("adress");
        $query = $query->result_array();

        if (isset($parameters['list']) && $parameters['list'] == true) {
            $query = $this->formatList($query);
        }
        return $query;
    }

    private function formatList($target = array())
    {
        foreach ($target as $value) {
            $id = $value['id'];
            $result[$id] = $value;
        }
        $target = $result;
        return $target;
    }

}