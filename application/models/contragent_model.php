<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contragent_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getContragents($parameters = array())
    {
        if(isset($parameters['ids'])){
            if(!is_array($parameters['ids'])){
                $parameters['ids'] = (array) $parameters['ids'];
            }
            $this->db->where_in('username', $parameters['ids']);
        }

        $query = $this->db->get("contragent");
        $query = $query->result_array();

        if (isset($parameters['list']) && $parameters['list'] == true) {
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
