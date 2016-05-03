<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getOrders($params = array()){

        if(isset($params['jtStartIndex'])) {
            $start = $params['jtStartIndex'];
        }else{
            $start = 0;
        }

        if(isset($params['jtPageSize'])) {
            $limit = $params['jtPageSize'];
        }else{
            $limit = 10;
        }

        $contragents = $this->db->select('id, name')->get('contragent')->result_array();
        foreach ($contragents as $key => $val) {
            unset($contragents[$key]);
            $contragents[$val['id']] = $val['name'];
        }

        $adress = $this->db->select('id, adress')->get('adress')->result_array();
        foreach ($adress as $key => $val) {
            unset($adress[$key]);
            $adress[$val['id']] = $val['adress'];
        }

        $cours = $this->db->select('id, nick')->get('cour')->result_array();
        foreach ($cours as $key => $val) {
            unset($cours[$key]);
            $cours[$val['id']] = $val['nick'];
        }

        $this->db->order_by('id','DESC');
        $rows = $this->db->get('order',$limit,$start)->result_array();

        foreach ($rows as $row) {
            $result['id'] = $row['id'];
            $result['name'] = $contragents[$row['id_client']];
            $result['color'] = "<input type=\"color\" class=\"color-order\" data-id=\"{$row['id']}\" value=\"{$row['color']}\">";
            $result['background'] = $row['color'];
            $result['sender_adress'] = ($row['id_sender_adress']>0 ? $adress[$row['id_sender_adress']] : '');
            $result['sender_dis_note'] = $row['sender_dis_note'];
            $result['sender_courier'] = $row['sender_courier'];
            $result['recipient_dis_note'] = $row['recipient_dis_note'];
            $result['recipient_courier'] = $row['recipient_courier'];
            $results[] = $result;
        }

        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['TotalRecordCount'] = $this->db->count_all('order');
        $jTableResult['Records'] = $results;
        $jTableResult['subdata']['cours'] = (array) $cours;
        return json_encode($jTableResult);
    }

    public function deleteOrders($orders = array()){

        if(!is_array($orders)){
            $orders = (array) $orders;
        }

        $this->db->where_in('id',$orders);
        $this->db->delete('order');

        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['TotalRecordCount'] = $this->db->count_all('order');
        return json_encode($jTableResult);

    }
}