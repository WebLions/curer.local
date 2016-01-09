<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
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
        $this->db->select('password, access, fio');
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
    public function getAdressList()
    {
        $result = $this->db->get("adress");
        return $result->result_array();
    }
}