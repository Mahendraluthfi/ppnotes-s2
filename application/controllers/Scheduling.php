<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scheduling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_in() == false)
	    {	     
	        redirect('login');
	    }

	    if ($this->session->userdata('level') !== 'ADMIN') {
	    	redirect('login');
	    }		

	    $this->load->model('Mstyles');
	    $this->load->model('Mscheduling');
	}

	public function index()
	{
		$data['get'] = $this->Mscheduling->get()->result();
		$data['content'] = 'scheduling';
		$this->load->view('index', $data);
	}

	public function add()
	{
		$data['style'] = $this->db->get_where('styles', array('status' => 1))->result();
		$data['content'] = 'scheduling_add';
		$this->load->view('index', $data);
	}

	public function edit($id)
	{
		$data['style'] = $this->db->get_where('styles', array('status' => 1))->result();
		$data['get'] = $this->Mscheduling->get_id($id)->row();
		$data['content'] = 'scheduling_edit';
		$this->load->view('index', $data);
	}

	public function get_style($id)
	{		
		$data = $this->Mstyles->get_id($id)->row();				
		echo json_encode($data);
	}

	public function submit()
	{
		$input = $this->input->post();

		$this->db->insert('scheduling', array(
			'plant' => $input['plant'],
			'styles_id' => $input['stylepick'],
			'season' => $input['season'],
			'smv' => $input['smv'],
			'range_buy' => $input['range'],
			'merchant' => $input['merchant'],
			'business_head' => $input['head'],
			'rm_date' => date('Y-m-d', strtotime($input['rmdate'])),
			'planned_date' => date('Y-m-d', strtotime($input['ppdate'])),
			'psd' => date('Y-m-d', strtotime($input['psd'])),
			'actual_date' => date('Y-m-d', strtotime($input['actualdate'])),
			'no_lines' => $input['nolines'],
			'pilot_line' => $input['pilotline'],
			'so' => $input['so'],
			'li' => $input['li'],
			'reason' => $input['reason'],
			'comments' => $input['comments'],
			'information' => $input['information']
		));

		$get_id = $this->db->query("SELECT MAX(scheduling_id) as max FROM scheduling")->row();		
		$this->_insert_new($get_id->max);

		$this->session->set_flashdata("msg", "
		$(document).ready(function() {
    		$('#delay-modal').modal('show');        
    		setTimeout(function() {
    			$('#delay-modal').modal('hide');          					
				}, 2500);
		});");		

		redirect('scheduling','refresh');
	}

	public function submit_edit($id)
	{
		$input = $this->input->post();

		$this->db->where('scheduling_id', $id);
		$this->db->update('scheduling', array(
			'plant' => $input['plant'],
			'styles_id' => $input['stylepick'],
			'season' => $input['season'],
			'smv' => $input['smv'],
			'range_buy' => $input['range'],
			'merchant' => $input['merchant'],
			'business_head' => $input['head'],
			'rm_date' => date('Y-m-d', strtotime($input['rmdate'])),
			'planned_date' => date('Y-m-d', strtotime($input['ppdate'])),
			'psd' => date('Y-m-d', strtotime($input['psd'])),
			'actual_date' => date('Y-m-d', strtotime($input['actualdate'])),
			'no_lines' => $input['nolines'],
			'pilot_line' => $input['pilotline'],
			'so' => $input['so'],
			'li' => $input['li'],
			'reason' => $input['reason'],
			'comments' => $input['comments'],
			'information' => $input['information']
		));		

		$this->session->set_flashdata("msg", "
		$(document).ready(function() {
    		$('#delay-modal').modal('show');        
    		setTimeout(function() {
    			$('#delay-modal').modal('hide');          					
				}, 2500);
		});");		

		redirect('scheduling','refresh');
	}

	public function detail($id)
	{
		$data = $this->Mscheduling->get_id($id)->row();
		echo json_encode($data);
	}

	public function delete($id)
	{
		$this->db->where('scheduling_id', $id);
		$this->db->delete('scheduling');

		echo json_encode(array('status' => TRUE));
	}

	public function get_att($id)
	{
		$data = $this->Mscheduling->get_att($id)->result();
		echo json_encode($data);
	}

	public function _insert_new($id)
		{
			$this->db->insert('meeting_pp', array('scheduling_id' => $id));
			$this->db->insert('meeting_pl', array('scheduling_id' => $id));
			$this->db->insert('meeting_pl2', array('scheduling_id' => $id));
			$this->db->insert('meeting_mast', array('scheduling_id' => $id));
		}

}

/* End of file Scheduling.php */
/* Location: ./application/controllers/Scheduling.php */