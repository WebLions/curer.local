<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getStatuses($parameters = array())
    {
        $query = $this->db->get("statuses");
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

}