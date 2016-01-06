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
}