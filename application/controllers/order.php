<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','html'));
        $this->load->library("form_validation");
    }

    public function index(){
        if(!$this->data['user_token']) {
            redirect('user/home');
        }
        $this->load->model("order_model");
        $this->load->model("payment_model");
        $this->load->model("delivery_model");
        $this->load->model("status_model");
        $orders = $this->order_model->getOrders();
        $payments = $this->payment_model->getPayments(array('list' => TRUE));
        $deliveries = $this->delivery_model->getDeliveries(array('list' => TRUE));
        $statuses = $this->status_model->getStatuses(array('list' => TRUE));
        foreach ($orders as $key => $val) {
            $payment_id = $val['payment_id'];
            $delivery_id = $val['delivery_id'];
            $status_id = $val['status_id'];
            $v['orders'][] = array(
                'id' => $val['id'],
                'contragent' => $val['contragent_id'],
                'payment' => $payments[$payment_id]['type'],
                'delivery' => $deliveries[$delivery_id]['type'],
                'status' => $statuses[$status_id]['type'],
                'tariff' => $val['tariff'],
            );
        }
        $v['active'] = "olist";
        $this->load->view('user/header', $v);
        $this->load->view('order/orders');
        $this->load->view('user/footer');
    }


    public function deleteOrders(){
        echo $this->order_model->deleteOrders($this->input->post());
        return false;
    }
}