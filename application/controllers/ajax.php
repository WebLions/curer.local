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
}