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
        $this->load->model('contragent_model');
        $contragents = $this->contragent_model->getContragents(array('list' => TRUE));
        $v['contagents'] = array();
        foreach ($contragents as $key => $val) {
            $v['contagents'][$key] = $val['name'];
        }
        $this->load->view('user/header', $v);
        $this->load->view('order/orders');
        $this->load->view('user/footer');
    }
    public function deleteOrders(){
        echo $this->order_model->deleteOrders($this->input->post());
        return false;
    }
    public function ajax_new_order()
    {
        $this->load->model("order_model");
        $this->load->model("adress_model");
        $this->load->model("courier_order_model");
        $data = $this->input->post();

        //Заполняем таблицу Orders
        $order = array();
        $req_orders = array('contragent_id', 'payment_id', 'delivery_id', 'status_id', 'tariff');//Поля для таблицы orders
        foreach ($data as $key=>$value){
            foreach ($req_orders as $k=>$required){
                if ($data[$key] == $req_orders[$required])
                $order[$key] = $value;
            }
        }
        $order_id = $this->order_model->addOrder($order);

        //Записываем адреса
        $recipient_adress = array(
            'id_contragent' => 0,
            'adress' => $data['recipient_adress'],
            'note' => $data['recipient_note'],
        );
        $recipient_adress = $this->adress_model->addAdress($recipient_adress);//Добавляем новый адрес и получаем его айди в таблице
            //Если адрес отправителя новый — то записываем его в базу
        if (is_string($data['sender_adress'])){
            $sender_adress = array(
                'id_contragent' => 0,
                'adress' => $data['sender_adress'],
                'note' => $data['sender_note'],
            );
            $sender_adress = $this->adress_model->addAdress($sender_adress);//Добавляем новый адрес и получаем его айди в таблице
        }
        else{
            $sender_adress = $data['sender_adress'];
        }

        //Заполняем таблицу courier_order
            //Курьер отправителя
        $sender_cour = array(
            'order_id' => $order_id,
            'adress_id' => $sender_adress,
            'date' => $data['sender_date'],
            'time_from' => $data['sender_time_from'],
            'time_to' => $data['sender_time_to'],
            'weight' => $data['sender_weight'],
            'option' => $data['sender_option'],
            'buy' => $data['sender_buy'],
            'sell' => $data['sender_sell'],
            'comment' => $data['sender_comment'],
        );
        $this->courier_order->addRecord($sender_cour);
            //Курьер получателя
        $recipient_cour = array(
            'order_id' => $order_id,
            'adress_id' => $sender_adress,
            'date' => $data['recipient_date'],
            'time_from' => $data['recipient_time_from'],
            'time_to' => $data['recipient_time_to'],
            'weight' => $data['recipient_weight'],
            'option' => $data['recipient_option'],
            'buy' => $data['recipient_buy'],
            'sell' => $data['recipient_sell'],
            'comment' => $data['recipient_comment'],
        );
        $this->courier_order->addRecord($recipient_cour);
        return false;
    }

}
