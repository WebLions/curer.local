<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Till extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','html'));
        $this->load->library("form_validation");
    }

    public function till()
    {
        $this->load->model("till_model");
        $data['till'] = $this->till_model->getTill();
        $this->load->view('user/header', $this->data);
        $this->load->view('till/till_list');
        $this->load->view('user/footer');

    }
}