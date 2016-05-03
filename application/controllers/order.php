<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','html'));
        $this->load->library("form_validation");
        $this->load->model("order_model");
        $this->load->model("user_model");
    }

    public function index(){

        $this->data['active'] = "orders";
        $this->data['head_title'] = "Заказы";
        $this->data['clientList'] = $this->user_model->getClientsList();

        $this->load->view('user/header', $this->data);
        $this->load->view('order/list', $this->data);
        $this->load->view('user/footer');
    }

    public function getOrders(){
        echo $this->order_model->getOrders($this->input->get());
        return false;
    }

    public function deleteOrders(){
        echo $this->order_model->deleteOrders($this->input->post());
        return false;
    }
}