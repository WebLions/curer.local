<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function hash_password_db($login, $password)
    {
        return md5( $password . md5($login));
    }

    public function addUser($post = array())
    {
        $password = $this->hash_password_db($post['login'], $post['password']);
        $data = array(
            'fio' => $post['fio'],
            'login' => $post['login'],
            'password' => $password,
            'access' => $post['access']
        );
        $this->db->insert("users", $data);
    }
    public function saveUser($post = array())
    {
        $data = array(
            'fio' => $post['fio'],
            'login' => $post['login'],
            'access' => $post['access']
        );
        if( !empty($post['password']) )
        {
            $password = $this->hash_password_db($post['login'], $post['password']);
            $data['password'] = $password;
        }

        $this->db->where("users.id", $post['id']);
        $this->db->update("users", $data);
    }

    public function getUsers()
    {
        $result = $this->db->get("users");
        return $result->result_array();
    }
    public function deleteUser($id = "")
    {
        $this->db->where("users.id", $id);
        $this->db->delete("users");
    }

    public function getUser($id = "")
    {
        $this->db->where("users.id",$id);
        $result = $this->db->get("users");
        return $result->row();
    }

    public function addContragent($post = array()) //добовление нового контрагента
    {
        $data = array(
            'name' => $post['name'],
            'vendor' => $post['vendor'],
            'contact' => $post['contact']
        );
        $this->db->insert("contragent", $data);
    }

    public function getContragents() //получение данных контагентов
    {
        $query = $this->db->get("contragent");
        return $query->result_array();
    }
    public function getContragent($id) //получение данных ондного контагента по id
    {
        $this->db->where("id",$id);
        $result = $this->db->get("contragent");
        return $result->row();
    }
    public function deleteContragent($id) //удаление ондного контагента по id
    {
        $this->db->where("id",$id);
        $query = $this->db->delete("contragent");
    }

    public function saveContragent($post = array()) //редактирование контрагента
    {
        $data = array(
            'name' => $post['name'],
            'vendor' => $post['vendor'],
            'contact' => $post['contact']
        );
        $this->db->where("id", $post['id']);
        $this->db->update("contragent", $data);
    }
    public function addAdress($post = array()) //добовление нового адреса
    {
        $data = array(
            'id_contragent' => $post['id'],
            'adress' => $post['adress'],
            'note' => $post['note']
        );
        $this->db->insert("adress", $data);
    }

    public function saveAdress($post = array()) //редактирование адреса
    {
        $data = array(
            'adress' => $post['adress'],
            'note' => $post['note']
        );
        $this->db->where("id", $post['id']);
        $this->db->update("adress", $data);
    }
    public function getAdresss($id = 0) //получение данных контагентов
    {
        $this->db->where("id_contragent", $id);
        $query = $this->db->get("adress");
        return $query->result_array();
    }
    public function getAdress($id) //получение данных ондного контагента по id
    {
        $this->db->where("id", $id);
        $result = $this->db->get("adress");
        return $result->row();
    }
    public function deleteAdress($id) //удаление ондного контагента по id
    {
        $this->db->where("id", $id);
        $this->db->delete("adress");
    }
    //kurier
    public function saveCourier($post = array(), $type = 'save') // two type 'save' or 'update'
    {
        $data = array(
            'name' => $post['name'],
            'contact' => $post['contact'],
            'note' => $post['note']
        );
        $id = isset($post['id']) ? $post['id'] : null ;
        if($type == 'update' && !empty($id))
        {
            $this->db->where("id", $id);
            $this->db->update("cour", $data);
            return true;
        }
        $this->db->insert("cour", $data);
        return true;
    }
    public function getCouriers($id = 0) //получение данных курьеров
    {
        if(!empty($id))
        {
            $this->db->where("id", $id);
            $query = $this->db->get("cour");
            return $query->row();
        }else{
            $query = $this->db->get("cour");
            return $query->result_array();
        }
    }
    public function deleteCourier($id) //удаление ондного контагента по id
    {
        $this->db->where("id", $id);
        $this->db->delete("cour");
    }
    //kurier
    public function saveOrder($post = array(), $type = 'save') // two type 'save' or 'update'
    {
        if($post['buysell'] == 'buy')
        {
            $buy = true;
            $sell = false;
        }else{
            $buy = false;
            $sell = true;
        }

        $data = array(
            'id_client' => $post['id_client'],
            'date' => $post['date'],
            'order_state' => $post['order_state'],
            'tariff' => $post['tariff'],
            'payment' => $post['payment'],
            'giver_adress' => $post['giver_adress'],
            'id_courier_1' => $post['courier_1'],
            'taker_adress' => $post['taker_adress'],
            'id_courier_2' => $post['courier_2'],
            'buy' => $buy,
            'sell' => $sell
        );
        $id = isset($post['id']) ? $post['id'] : null ;
        if($type == 'update' && !empty($id))
        {
            $this->db->where("id", $id);
            $this->db->update("order", $data);
            return true;
        }
        $this->db->insert("order", $data);
        return true;
    }
    public function getShortOrders() //получение данных курьеров
    {
        $this->db->select("order.id, contragent.name as client, order.date, order.order_state, order.tariff, order.payment");
        $this->db->join("contragent", "contragent.id = order.id_client");
        $query = $this->db->get("order");
        return $query->result_array();

    }
    public function deleteOrder($id) //удаление  по id
    {
        $this->db->where("id", $id);
        $this->db->delete("order");
    }
    public function getOrder($id) //  по id
    {
        $this->db->where("id", $id);
        $query = $this->db->get("order");
        return $query->row();
    }
}