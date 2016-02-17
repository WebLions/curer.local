<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function __destruct()
    {
        $this->db->close();
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
            'contact' => $post['contact'],
            'other' => $post['other']
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
            'contact' => $post['contact'],
            'other' => $post['other']
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
            'nick' => $post['nick'],
            'name' => $post['name'],
            'contact' => $post['contact'],
            'color_id' => $post['color'],
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
            $this->db->select('cour.*, cour_color.color');
            $this->db->join('cour_color','cour_color.id=cour.color_id');
            $query = $this->db->get('cour');
            return $query->result_array();
        }
    }
    public function deleteCourier($id) //удаление ондного контагента по id
    {
        $this->db->where("id", $id);
        $this->db->delete("cour");
    }
    //kurier
    private function addAdresClient($id,$adress)
    {
        $data = array(
            'adress' => $adress
        );
        $this->db->where("id", $id);
        $this->db->update("adress", $data);
        return $this->db->insert_id();
    }
    public function saveOrder($post = array(), $type = 'save') // two type 'save' or 'update'
    {

        //$buy = empty($post['buy'])?"0":"1";
        //$sell = empty($post['sell'])?"0":"1";

        //$post['id_sender_adress'] = (is_int($post['id_sender_adress'])==true) ? $post['id_sender_adress'] : $this->addAdresClient($post['id_client'], $post['id_sender_adress']);
        if(!empty($post['new_sender_adress']))
        {
            $data = array(
                'id_contragent'=> $post['id_client'],
                'adress'=>$post['new_sender_adress'],
                'note'=>$post['sender_note']
            );
            $this->db->insert('adress',$data);
            $post['id_sender_adress'] = $this->db->insert_id();
        }
        $post['id_disp'] = $_SESSION['user_id'];
        unset($data);
        $date = array(
                    'id_client',
                    'id_disp',
                    'sender_order_date', //2016-01-22
                    'id_sender_adress', //14
                    'sender_note', //note
                    'sender_time1', //:00:00
                    'sender_time2', //:03:00
                    'sender_weight', //:11
                    'sender_order_note', //:102
                    'sender_courier', //:11
                    'sender_buy', //:0
                    'sender_sell', //:2
                    'sender_dis_note', //:note
                    'recipient_order_date', //:2016-01-22
                    'recipient_adress', //:адрес
                    'recipient_note', //:note
                    'recipient_time1', //:11:00
                    'recipient_time2', //:00:00
                    'recipient_weight', //:20
                    'recipient_order_note', //:131
                    'recipient_courier', //:14
                    'recipient_buy', //:20
                    'recipient_sell', //:20
                    'recipient_dis_note', //:note
                    'tariff', //:1234
                    'payment', //:Приват
                    'payment_person', //:Получатель
                    'state' //:Отменён
        );
        foreach ($date as $key) {
            $data[$key] = !empty($post[$key]) ? $post[$key] : '';
        }
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
        $this->db->select("
                         order.id,
                         sender.nick as sender_courier,
                         recipient.nick as recipient_courier,
                         users.fio as disp,
                         contragent.name as client,
                         order.state,
                         order.tariff,
                         order.payment,
                         adress.adress as sender_adress,
                         order.recipient_adress
                         ");
        $this->db->join("contragent", "contragent.id = order.id_client");
        $this->db->join("cour as sender", "sender.id = order.sender_courier");
        $this->db->join("cour as recipient", "recipient.id = order.recipient_courier");
        $this->db->join("adress", "adress.id = order.id_sender_adress");
        $this->db->join("users", "users.id = order.id_disp");
        //$this->db->where("users.id = {$user_id}");
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
    public function getAdressClient($id)
    {
        $this->db->where("id_contragent", $id);
        $query = $this->db->get("adress");
        return $query->result_array();
    }
    public function getAdressClientNote($id)
    {
        $this->db->select('note');
        $this->db->where("id", $id);
        $query = $this->db->get("adress");
        $query = $query->row();
        echo $query->note;
    }
    public function editInput($post){
        $this->db->where('id',$post['id']);
        $this->db->update("order", array($post['type']=>$post['val']));
    }
}