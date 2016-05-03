<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courier_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCouriers($params = array()){

        $cours = $this->db->select('id, name')->get('cour')->result_array();

        foreach ($cours as $row) {
            $result['id'] = $row['id'];
            $result['name'] = $row['name'];
            $results[] = $result;
        }

        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['TotalRecordCount'] = $this->db->count_all('order');
        $jTableResult['Records'] = $results;
        return json_encode($jTableResult);
    }

}