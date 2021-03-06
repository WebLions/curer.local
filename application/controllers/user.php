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
        $this->data['active'] = "home";

            $this->load->view('user/header', $this->data);
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
        $this->data['active'] = "ulist";

        $this->load->view('user/header', $this->data);
        $this->load->view('user/list', $this->data);
        $this->load->view('user/footer');

    }
    public function alist($id = 0)
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['client'] = $this->user_model->getClient($id);
        $this->data['listAdress'] = $this->user_model->getAdressList($id);
        $this->data['active'] = "clist";

        $this->load->view('user/header', $this->data);
        $this->load->view('adress/list', $this->data);
        $this->load->view('user/footer');
    }
    public function courlist($id = 0)
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        //$this->data['client'] = $this->user_model->getClient($id);
        $this->data['listCouriers'] = $this->user_model->getCouriersList();
        $this->data['color'] = $this->user_model->getColor();
        $this->data['active'] = "courlist";

        $this->load->view('user/header', $this->data);
        $this->load->view('courier/list', $this->data);
        $this->load->view('user/footer');
    }
    public function olist($id = 0)
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['client'] = $this->user_model->getClient($id);
        $this->data['clientList'] = $this->user_model->getClientsList();
        $this->data['courierList'] = $this->user_model->getCouriersList();
        $this->data['listOrders'] = $this->user_model->getShortOrders();

        $this->data['active'] = "olist";

        $this->load->view('user/header', $this->data);
        $this->load->view('order/list', $this->data);
        $this->load->view('user/footer');
    }
    public function order_view($id = 0)
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['active'] = "olist";
        $this->data['order'] = $this->user_model->getOrder((int) $id);

        $this->load->view('user/header', $this->data);
        $this->load->view('order/advansed_order_list', $this->data);
        $this->load->view('user/footer');
    }
    public function clist()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        //$this->data['listUsers'] = $this->user_model->getUserList();
        $this->data['listClients'] = $this->user_model->getClientsList();
        $this->data['active'] = "clist";

        $this->load->view('user/header', $this->data);
        $this->load->view('clients/list', $this->data);
        $this->load->view('user/footer');
    }

    public function cour_paths($id)
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        //$this->data['listUsers'] = $this->user_model->getUserList();
        $this->data['lists'] = $this->user_model->getPaths($id);
        $this->data['active'] = "paths";

        $this->load->view('user/header', $this->data);
        $this->load->view('paths/courier_paths_list', $this->data);
        $this->load->view('user/footer');
    }
    public function paths()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['cour'] = $this->user_model->getCourListPath();
        //$this->data['listClients'] = $this->user_model->getClientsList();
        $this->data['active'] = "paths";

        $this->load->view('user/header', $this->data);
        $this->load->view('paths/courier_path_list', $this->data);
        $this->load->view('user/footer');
    }

    public function cour_path($id)
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['paths'] = $this->user_model->getPaths((int)$id);
        $this->data['active'] = "paths";
        $this->data['cour'] = $this->user_model->getCourName((int)$id);

        $this->load->view('user/header', $this->data);
        $this->load->view('paths/paths_list', $this->data);
        $this->load->view('user/footer');
    }
    public function till()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['active'] = "till";
        $this->load->view('user/header', $this->data);
        $this->load->view('till/till_list', $this->data);
        $this->load->view('user/footer');
    }
    public function expenses()
{
    if(!$this->data['user_token']) {
        redirect('user/login');
    }
    $this->data['active'] = "expenses";
    $this->load->view('user/header', $this->data);
    $this->load->view('expenses/expenses_list', $this->data);
    $this->load->view('user/footer');
}
    public function sales()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['active'] = "sales";
        $this->load->view('user/header', $this->data);
        $this->load->view('sales/sales_list', $this->data);
        $this->load->view('user/footer');
    }
    public function revise()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['active'] = "revise";
        $this->load->view('user/header', $this->data);
        $this->load->view('revise/revise_list', $this->data);
        $this->load->view('user/footer');
    }

    //добавить контроллеры для всех видов
    public function logout()
    {
        unset($_SESSION['token']);
        session_destroy();
        redirect('/user/login','refresh');
    }

}