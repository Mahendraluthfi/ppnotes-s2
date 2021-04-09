<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meeting_stf extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
				
		if($this->auth->is_logged_in() == false)
	    {	     
	        redirect('login');
	    }

	    if ($this->session->userdata('level') !== 'STAFF') {
	    	redirect('login');
	    }		
	    $this->load->model('Mscheduling');
	}

	public function index()
	{
		$data['get'] = $this->Mscheduling->get()->result();				
		$data['content'] = 'ST/meeting';
		$this->load->view('index', $data, FALSE);	
	}

}

/* End of file Meeting_stf.php */
/* Location: ./application/controllers/Meeting_stf.php */