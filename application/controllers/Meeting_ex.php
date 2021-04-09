<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meeting_ex extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
				
		if($this->auth->is_logged_in() == false)
	    {	     
	        redirect('login');
	    }

	    if ($this->session->userdata('level') !== 'SENIOR EXECUTIVE') {
	    	redirect('login');
	    }		
	    $this->load->model('Mscheduling');
	}

	public function index($sort='')
	{
		$data['get'] = $this->Mscheduling->get()->result();				
		$data['content'] = 'SE/meeting';
		$this->load->view('index', $data, FALSE);	
	}

}

/* End of file Meeting_ex.php */
/* Location: ./application/controllers/Meeting_ex.php */