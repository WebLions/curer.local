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

}