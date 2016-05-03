<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courier extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','html'));
        $this->load->library("form_validation");
        $this->load->model("courier_model");
    }

    public function getCouriers(){
        echo $this->courier_model->getCouriers();
        return false;
    }
}