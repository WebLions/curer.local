<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function __destruct()
    {
        $this->db->close();
    }

    public function register($email, $password)
    {
        $password = md5($password . 'soult228');
        $data = array(
            'email' => $email,
            'password' => $password
        );
        $this->db->insert('users', $data);

        return true;
    }

    public function login($login = '', $password = '')
    {
        $this->db->select('password, access, fio, id');
        $this->db->from('users');
        $this->db->where('login', $login);
        $query = $this->db->get();
        $result = $query->row();

        if ($query->num_rows() == 1) {
            $password = $this->hash_password_db($login, $password);
            if ($result->password === $password) {
                $_SESSION['token'] = rand(0, 123456);
                $_SESSION['access'] = $result->access;
                $_SESSION['fio'] = $result->fio;
                $_SESSION['user_id'] = $result->id;
                return TRUE;
            } else {
                return FALSE;
            }
        }

    }
    function hash_password_db($login, $password)
    {
        return md5( $password . md5($login));
    }
    public function login_in()
    {
        return isset($_SESSION['token']);
    }
    public function getUserList()
    {
        $this->db->select("users.id, users.fio, users.login, access.role as access");
        $this->db->join("access","users.access = access.id");
        $result = $this->db->get("users");
        return $result->result_array();
    }
    public function getAccessList()
    {
        $result = $this->db->get("access");
        return $result->result_array();
    }
    public function getClientsList() //получение данных контагентов
    {
        $query = $this->db->get("contragent");
        return $query->result_array();
    }
    public function getClient($id = 0)
    {
        $this->db->where("id", $id);
        $result = $this->db->get("contragent");
        return $result->row();
    }
    public function getAdressList($id = 0)
    {
        $this->db->where("id_contragent", $id);
        $result = $this->db->get("adress");
        return $result->result_array();
    }
    public function getCouriersList()
    {
        $this->db->select('cour.*, cour_color.color');
        $this->db->join('cour_color','cour_color.id=cour.color_id');
        $result = $this->db->get('cour');
        return $result->result_array();
    }
    // @courier list for path page
    public function getCourListPath()
    {
        $this->db->select('cour.id, cour.name, cour.nick, cour_color.color');
        $this->db->join('cour_color','cour_color.id=cour.color_id');
        $result = $this->db->get('cour');
        return $result->result_array();
    }
    public function getShortOrders() //получение данных курьеров
    {

        $this->db->select("
                         order.id,
                         sender.nick as sender_courier,
                         recipient.nick as recipient_courier,
                         sender.id as sender_id,
                         recipient.id as recipient_id,
                         contragent.name as client,
                         order.state,
                         order.tariff,
                         order.payment,
                         order.sender_dis_note,
                         order.recipient_dis_note,
                         adress.adress as sender_adress,
                         order.recipient_adress
                         ");
        $this->db->join("contragent", "contragent.id = order.id_client");
        $this->db->join("cour as sender", "sender.id = order.sender_courier");
        $this->db->join("cour as recipient", "recipient.id = order.recipient_courier");
        $this->db->join("adress", "adress.id = order.id_sender_adress");

        //$this->db->where("users.id = {$user_id}");
        $query = $this->db->get("order");
        //echo $this->db->last_query();
        //var_dump($query->row());
        return $query->result_array();

    }
    public function getOrder($id)
    {
        $this->db->select("
                         order.*,
                         sender.nick as sender_courier,
                         recipient.nick as recipient_courier,
                         users.fio as disp,
                         contragent.name as client,
                         adress.adress as sender_adress,
                         ");
        $this->db->join("contragent", "contragent.id = order.id_client");
        $this->db->join("cour as sender", "sender.id = order.sender_courier");
        $this->db->join("cour as recipient", "recipient.id = order.recipient_courier");
        $this->db->join("adress", "adress.id = order.id_sender_adress");
        $this->db->join("users", "users.id = order.id_disp");
        $this->db->where("order.id",$id);
        $query = $this->db->get("order");
        return $query->row();
    }

    public function getPaths($id = 0)
    {
        $this->db->select("
                         order.*,
                         sender.nick as sender_courier,
                         recipient.nick as recipient_courier,
                         contragent.name as client,
                         contragent.vendor as vendor,
                         ");
        $this->db->join("contragent", "contragent.id = order.id_client");
        $this->db->join("cour as sender", "sender.id = order.sender_courier");
        $this->db->join("cour as recipient", "recipient.id = order.recipient_courier");
        $this->db->join("adress", "adress.id = order.id_sender_adress");
        $this->db->where("order.sender_courier",$id);
        $this->db->or_where("order.recipient_courier",$id);
        $query = $this->db->get("order");

        return $query->result_array();
    }
    public function getCourName($id = 0)
    {
        $this->db->select('nick');
        $this->db->where('cour.id',$id);
        $query = $this->db->get('cour');
        return $query->row();
    }
    public function getColor()
    {
        $query = $this->db->get("cour_color");
        return $query->result_array();
    }
}