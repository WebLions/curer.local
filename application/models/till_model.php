<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getTill($parameters = array())
    {
        $query = $this->db->get_where('courier_order', array('status_id' => 1)); // 1 - статус "выполнено"
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