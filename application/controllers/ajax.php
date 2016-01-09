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
        $this->form_validation->set_rules('vendor','Пароль','trim|required|xss_clean');
        $this->form_validation->set_rules('contact','ФИО','trim|required|xss_clean');

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
        //$this->form_validation->set_rules('password','Пароль','trim|required|xss_clean');
        $this->form_validation->set_rules('vendor','ФИО','trim|required|xss_clean');
        $this->form_validation->set_rules('contact','Роль','trim|required|xss_clean');

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
}