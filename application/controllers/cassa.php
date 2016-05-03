<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cassa extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','html'));
        $this->load->library("form_validation");
        $this->load->model("cassa_model");
    }

    public function index(){

        $this->data['active'] = "orders";
        $this->data['head_title'] = "Заказы";
        $this->data['clientList'] = $this->user_model->getClientsList();

        $this->load->view('user/header', $this->data);
        $this->load->view('order/list', $this->data);
        $this->load->view('user/footer');
    }

    public function getCassa(){
        echo $this->cassa_model->getCassa($this->input->get());
        return false;
    }

}