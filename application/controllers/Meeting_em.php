<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meeting_em extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
				
		if($this->auth->is_logged_in() == false)
	    {	     
	        redirect('login');
	    }

	    if ($this->session->userdata('level') !== 'EXECUTIVE') {
	    	redirect('login');
	    }		
	    $this->load->model('Mscheduling');
	}

	public function index($sort='')
	{
		$data['get'] = $this->Mscheduling->get()->result();				
		$data['content'] = 'EM/meeting';
		$this->load->view('index', $data, FALSE);	
	}

}

/* End of file Meeting_em.php */
/* Location: ./application/controllers/Meeting_em.php */