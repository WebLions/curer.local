<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
    }
	public function index()
	{
		$money = 400;
		$procent = $money / (10000/100);
		$this->data['money1'] = $money;
		$this->data['procent1'] = $procent;

		$money = 0;
		$procent = $money / (10000/100);
		$this->data['money2'] = $money;
		$this->data['procent2'] = $procent;

		$money = 0;
		$procent = $money / (10000/100);
		$this->data['money3'] = $money;
		$this->data['procent3'] = $procent;

		$this->load->view('welcome_message',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */