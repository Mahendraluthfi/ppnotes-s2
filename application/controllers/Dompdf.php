<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dompdf extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mscheduling');		
	}

	public function index()
	{
		$id = 2;
	    $this->load->library('pdfgenerator');
	    $data['get']	= $this->Mscheduling->get_id($id)->row();		
		$data['pp'] 	= $this->db->get_where('meeting_pp', array('scheduling_id'=> $id))->row();	
		$data['id'] 	= $id;
		$data['att'] 	= $this->Mscheduling->get_att($id)->result();	    
	    $html = $this->load->view('ppnotes', $data, true);
    	$filename = 'report_'.time();
    	$this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');

	}

	public function view()
	{
		$id = 2;	
	    $data['get']	= $this->Mscheduling->get_id($id)->row();		
		$data['att'] 	= $this->Mscheduling->get_att($id)->result();	    		
		$data['id'] 	= $id;
		$data['mast'] 	= $this->db->get_where('meeting_mast', array('scheduling_id'=> $id))->row();
		$this->load->view('mast', $data);
	}


}

/* End of file Dompdf.php */
/* Location: ./application/controllers/Dompdf.php */