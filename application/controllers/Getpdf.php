<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getpdf extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('pdfgenerator');
		$this->load->model('Mscheduling');
	}

	public function index()
	{
				
	}

	public function get_ppb($id)
	{
		$get			= $this->Mscheduling->get_id($id)->row();		
		$data['get']	= $get;		
		$data['pp'] 	= $this->db->get_where('meeting_pp', array('scheduling_id'=> $id))->row();	
		$data['id'] 	= $id;
		$data['att'] 	= $this->Mscheduling->get_att($id)->result();	    	    
	    $this->load->view('bppnotes', $data, FALSE);
	}

	public function get_plb($id)
	{
		$get			= $this->Mscheduling->get_id($id)->row();		
		$data['get']	= $get;		
		$data['pl'] 	= $this->db->get_where('meeting_pl', array('scheduling_id'=> $id))->row();	
		$data['pl2'] 	= $this->db->get_where('meeting_pl2', array('scheduling_id'=> $id))->row();	
		$data['id'] 	= $id;
		$data['att'] 	= $this->Mscheduling->get_att($id)->result();	    
	    $this->load->view('bplnotes', $data, FALSE);    	
	}

}

/* End of file Getpdf.php */
/* Location: ./application/controllers/Getpdf.php */