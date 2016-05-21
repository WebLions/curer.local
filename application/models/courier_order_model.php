<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courier_order_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addRecord($data = array())
    {
        if(!isset($data)){return false;}
        $this->db->insert("courier_order", $data);
        return $this->db->insert_id();
    }
}