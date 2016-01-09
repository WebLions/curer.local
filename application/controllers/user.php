<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','html'));
        $this->load->library("form_validation");
        $this->load->model("user_model");
    }
    public function login()
    {
        if($this->data['user_token']) {
            redirect('user/home');
        }
        $this->form_validation->set_rules('login','Login','trim|required|xss_clean');
        $this->form_validation->set_rules('password','Password','trim|required|xss_clean');
            if( $this->form_validation->run() == TRUE )
            {
                $result = $this->user_model->login( $this->input->post('login'), $this->input->post('password') );
                if($result){
                    redirect('user/home');
                }else{
                    redirect('user/login');
                }
            }else {
                $this->load->view('user/login_header');
                $this->load->view('user/login');
                $this->load->view('user/footer');
            }
    }
    public function home()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
            $this->load->view('user/header');
            $this->load->view('user/home');
            $this->load->view('user/footer');

    }
    public function ulist()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['listUsers'] = $this->user_model->getUserList();
        $this->data['listAccess'] = $this->user_model->getAccessList();

        $this->load->view('user/header');
        $this->load->view('user/list', $this->data);
        $this->load->view('user/footer');

    }
    public function alist()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        //$this->data['listUsers'] = $this->user_model->getUserList();
        $this->data['listAdress'] = $this->user_model->getAdressList();

        $this->load->view('user/header');
        $this->load->view('adress/list', $this->data);
        $this->load->view('adress/footer');
    }
    //добавить контроллеры для всех видов
    public function logout()
    {
        unset($_SESSION['token']);
        session_destroy();
        redirect('/user/login','refresh');
    }

}