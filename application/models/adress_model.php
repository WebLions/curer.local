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
}