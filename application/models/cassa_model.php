<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cassa_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCassa($params = array()){

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

        $cours = $this->db->select('id, nick')->get('cour')->result_array();
        foreach ($cours as $key => $val) {
            unset($cours[$key]);
            $cours[$val['id']] = $val['nick'];
        }

        foreach ($cours as $key => $val) {
            $result['id'] = $key;
            $result['name'] = $val;
            $this->db->select_sum('buy + sell', 'sum');
            $this->db->where('status','Выполнено');
            $this->db->where('cour_id',$key);
            $r = $this->db->get('cour_to_order')->row();
            $result['cassa'] = $r->sum;
            $results[] = $result;
        }

        $count = $this->db->count_all('cour_to_order');
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['TotalRecordCount'] = $count;
        $jTableResult['Records'] = $results;
        $jTableResult['subdata']['cours'] = (array) $cours;
        return json_encode($jTableResult);
    }

}