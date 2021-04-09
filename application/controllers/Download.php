<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

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
		$this->load->view('print/pp', $data);
	    // $html = $this->load->view('bppnotes', $data, true);
    	// $filename = 'report_preproduction_'.$get->style_no;
    	// $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}

	public function get_pp($id)
	{
		$get			= $this->Mscheduling->get_id($id)->row();		
		$data['get']	= $get;		
		$data['pp'] 	= $this->db->get_where('meeting_pp', array('scheduling_id'=> $id))->row();	
		$data['id'] 	= $id;
		$data['att'] 	= $this->Mscheduling->get_att($id)->result();	    
	    $html = $this->load->view('ppnotes', $data, true);
    	$filename = 'report_preproduction_'.$get->style_no;
    	$this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}

	public function get_plb($id)
	{
		$get			= $this->Mscheduling->get_id($id)->row();		
		$data['get']	= $get;		
		$data['pl'] 	= $this->db->get_where('meeting_pl', array('scheduling_id'=> $id))->row();	
		$data['pl2'] 	= $this->db->get_where('meeting_pl2', array('scheduling_id'=> $id))->row();	
		$data['id'] 	= $id;
		$data['att'] 	= $this->Mscheduling->get_att($id)->result();	    
	   $this->load->view('print/pl', $data);
	    // $html = $this->load->view('bppnotes', $data, true);
    	// $filename = 'report_preproduction_'.$get->style_no;
    	// $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}

	public function get_pl($id)
	{
		$get			= $this->Mscheduling->get_id($id)->row();		
		$data['get']	= $get;		
		$data['pl'] 	= $this->db->get_where('meeting_pl', array('scheduling_id'=> $id))->row();	
		$data['pl2'] 	= $this->db->get_where('meeting_pl2', array('scheduling_id'=> $id))->row();	
		$data['id'] 	= $id;
		$data['att'] 	= $this->Mscheduling->get_att($id)->result();	    
	    $html = $this->load->view('plnotes', $data, true);
    	$filename = 'report_pilotappraisal_'.$get->style_no;    	
    	$this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}

	public function get_mast($id)
	{
		$get			= $this->Mscheduling->get_id($id)->row();		
		$data['get']	= $get;		
		$data['mast'] 	= $this->db->get_where('meeting_mast', array('scheduling_id'=> $id))->row();			
		$data['id'] 	= $id;
		$data['att'] 	= $this->Mscheduling->get_att($id)->result();	 
		$this->load->view('print/mast', $data);   
	    // $html = $this->load->view('mast', $data, true);
    	// $filename = 'report_mast_'.$get->style_no;    	    	
    	// $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}

	public function get_mastglobal($id)
	{
		$get	= $this->Mscheduling->get_id($id)->row();				
		$data['title'] = 'MAST';
		$data['global'] = $this->db->get_where('mast_global', array('scheduling_id' => $id))->row();		
		$data['get'] =  $this->Mscheduling->get_id($id)->row();		
		$data['att'] = $this->Mscheduling->get_att($id)->result();		
		$data['cbf'] = $this->db->get_where('mast_cbf',array('scheduling_id' => $id))->result();
		$data['cbt'] = $this->db->get_where('mast_cbt',array('scheduling_id' => $id))->result();									
	    $this->load->view('print/mast_global', $data);
	    // $html = $this->load->view('_new/mast_pdf', $data, true);
    	// $filename = 'report_mastglobal_'.$get->style_no;    	    	
    	// $this->pdfgenerator->generate($html, $filename, true, 'Legal', 'portrait');
	}

	public function get_pra($id)
	{
		$get			= $this->Mscheduling->get_id($id)->row();		
		$data['get']	= $get;		
		$data['pra'] 	= $this->db->get_where('pra', array('scheduling_id'=> $id))->row();			
		$data['id'] 	= $id;
		$data['att'] 	= $this->db->get_where('atteendees_pra', array('scheduling_id'=> $id))->result();	    
	    // $html = $this->load->view('pra_pdf', $data, true);
    	// $filename = 'report_pra_'.$get->style_no;    	    	
    	// $this->pdfgenerator->generate($html, $filename, true, 'A4', 'landscape');

    	$this->load->view('print/pra', $data);
  
	}

	public function get_pdra($id)
	{
		$get			= $this->Mscheduling->get_id($id)->row();		
		$data['get']	= $get;		
		$data['pdra'] 	= $this->db->get_where('pdra', array('scheduling_id'=> $id))->row();			
		$data['id'] 	= $id;
		$data['ext'] 	= $this->db->get_where('pdra_extend', array('scheduling_id'=> $id))->result();	    
	    $html = $this->load->view('pdra_pdf', $data, true);
    	$filename = 'report_pdra_'.$get->style_no;    	    	
    	$this->pdfgenerator->generate($html, $filename, true, 'A4', 'potrait');
	}

	public function pra2($id)
	{
		$data['risk'] = $this->db->get_where('pra_element', array('scheduling_id' => $id))->result();
		$data['detail'] = $this->db->get_where('pra_desc', array('scheduling_id' => $id))->result();
		$data['get'] = $this->db->get_where('pra2_main', array('scheduling_id' => $id))->row();
		$data['content'] = 'Welcome';
    	$this->load->view('print/pra2', $data);

		// $html = $this->load->view('_new/pra_pdf', $data, true);
  //   	$filename = 'report_pra_'.$id;    	    	
  //   	$this->pdfgenerator->generate($html, $filename, true, 'A4', 'landscape');		
	}
}

/* End of file Download.php */
/* Location: ./application/controllers/Download.php */