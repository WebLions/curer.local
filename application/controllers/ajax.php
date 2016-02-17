<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("ajax_model");
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }
    public function getUser()
    {
        $this->data['user'] = $this->ajax_model->getUser( (int) $this->input->post("userId") );
        $this->data['listAccess'] = $this->user_model->getAccessList();
        $this->load->view('user/edit', $this->data);
    }
    public function getUsers()
    {
        $this->data['listUsers'] = $this->user_model->getUserList();
        $this->load->view('ajax/users_list', $this->data);
    }
    public function deleteUser()
    {
        $this->ajax_model->deleteUser( (int) $this->input->post("userId") );
    }

    public function addUser()
    {
        $this->form_validation->set_rules('login','Логин','trim|required|xss_clean');
        $this->form_validation->set_rules('password','Пароль','trim|required|xss_clean');
        $this->form_validation->set_rules('fio','ФИО','trim|required|xss_clean');
        $this->form_validation->set_rules('access','Роль','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->addUser( $this->input->post() );
        }else{
                $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    public function saveUser()
    {
        $this->form_validation->set_rules('login','Логин','trim|required|xss_clean');
        //$this->form_validation->set_rules('password','Пароль','trim|required|xss_clean');
        $this->form_validation->set_rules('fio','ФИО','trim|required|xss_clean');
        $this->form_validation->set_rules('access','Роль','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->saveUser( $this->input->post() );
        }else{
            $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    public function addContragent()
    {
        $this->form_validation->set_rules('name','Логин','trim|required|xss_clean');
        $this->form_validation->set_rules('contact','Контакты','trim|required|xss_clean');
        $this->form_validation->set_rules('other','Дополнительно','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->addContragent( $this->input->post() );
        }else{
            $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    public function getContragents()
    {
        $this->data['listClients'] = $this->ajax_model->getContragents();
        $this->load->view('ajax/clients_list', $this->data);
    }
    public function getContragent()
    {
        $this->data['client'] = $this->ajax_model->getContragent($this->input->post('userId'));
        $this->load->view('clients/edit', $this->data);
    }
    public function saveContragent()
    {
        $this->form_validation->set_rules('name','Логин','trim|required|xss_clean');
        $this->form_validation->set_rules('contact','Контакты','trim|required|xss_clean');
        $this->form_validation->set_rules('other','Дополнительно','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->saveContragent( $this->input->post() );
        }else{
            $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    public function deleteContragent()
    {
        $this->ajax_model->deleteContragent( (int) $this->input->post("userId") );
    }
    public function addAdress()
    {
        $this->form_validation->set_rules('adress','Логин','trim|required|xss_clean');
        $this->form_validation->set_rules('note','Пароль','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->addAdress( $this->input->post() );
        }else{
            $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    public function getAdresss()
    {
        $this->data['listAdress'] = $this->ajax_model->getAdresss($this->input->post('id'));
        $this->load->view('ajax/adress_list', $this->data);
    }
    public function getAdress()
    {
        $this->data['listAdress'] = $this->ajax_model->getAdress($this->input->post('id'));
        $this->load->view('adress/edit', $this->data);
    }
    public function deleteAdress()
    {
        $this->ajax_model->deleteAdress( (int) $this->input->post("id") );
    }
    public function saveAdress()
    {
        $this->form_validation->set_rules('adress','Логин','trim|required|xss_clean');
        $this->form_validation->set_rules('note','ФИО','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->saveAdress( $this->input->post() );
        }else{
            $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    //Courier
    public function addCourier()
    {
        $this->form_validation->set_rules('name','ФИО','trim|required|xss_clean');
        $this->form_validation->set_rules('contact','Контактные данные','trim|required|xss_clean');
        $this->form_validation->set_rules('note','Примечание','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->saveCourier( $this->input->post() );
        }else{
            $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    public function saveCourier()
    {
        $this->form_validation->set_rules('name','ФИО','trim|required|xss_clean');
        $this->form_validation->set_rules('contact','Контактные данные','trim|required|xss_clean');
        $this->form_validation->set_rules('note','Примечание','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->saveCourier( $this->input->post(), "update" );
        }else{
            $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    public function getCouriers($id = '')
    {
        $id = $this->input->post('id');
        $this->data['listCouriers'] = $this->ajax_model->getCouriers($id);
        $this->data['color'] = $this->user_model->getColor();
        if(!empty($id))
            $this->load->view('courier/edit', $this->data);
        else
            $this->load->view('ajax/courier_list', $this->data);
    }
    public function deleteCourier()
    {
        $this->ajax_model->deleteCourier( (int) $this->input->post("id") );
    }
    //Orders
    public function addOrder()
    {
        $this->form_validation->set_rules('id_client','Клиент','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->saveOrder( $this->input->post() );
        }else{
            $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    public function saveOrder()
    {
        $this->form_validation->set_rules('id_client','Клиент','trim|required|xss_clean');

        if($this->form_validation->run() == true)
        {
            $this->data['error'] = 0;
            $this->ajax_model->saveOrder( $this->input->post(), "update");
        }else{
            $this->data['error'] = 1;
        }
        echo json_encode($this->data);
    }
    public function getShortOrders()
    {
        $this->data['listOrders'] = $this->ajax_model->getShortOrders();
        $this->load->view('ajax/orders_list', $this->data);
    }
    public function getOrder()
    {
        $this->data['order'] = $this->ajax_model->getOrder((int) $this->input->post("id"));

        $this->data['clientList'] = $this->user_model->getClientsList();
        $this->data['courierList'] = $this->user_model->getCouriersList();
        $this->data['adressList'] = $this->user_model->getAdressList($this->data['order']->id_client);

        $this->load->view('order/edit', $this->data);
    }
    public function deleteOrder()
    {
        $this->ajax_model->deleteOrder( (int) $this->input->post("id") );
    }
    public function getAdressClient()
    {
        $this->data['adress'] = $this->ajax_model->getAdressClient( (int) $this->input->post("id") );
        $this->load->view('ajax/listAdressClient', $this->data);
    }
    public function getAdressClientNote()
    {
        $this->ajax_model->getAdressClientNote( (int) $this->input->post("id") );
    }
    public function editInput(){
        $this->ajax_model->editInput( $this->input->post() );
    }
}