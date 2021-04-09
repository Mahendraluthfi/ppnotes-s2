<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scheduling_ex extends CI_Controller {

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

	public function index()
	{
		$data['get'] = $this->Mscheduling->get()->result();		
		$data['respons'] = $this->db->get_where('employee', array('employee_id' => $this->session->userdata('employee_id')))->row();
		$data['content'] = 'SE/scheduling';
		$this->load->view('index', $data);
	}

	public function detail($id)
	{
		$data = $this->Mscheduling->get_id($id)->row();
		echo json_encode($data);
	}	

	public function attendance($id)
	{
		$eid = $this->session->userdata('employee_id');		
		$get_dep = $this->db->get_where('employee', array('employee_id' => $eid))->row();
		$data['list'] = $this->Mscheduling->get_list($get_dep->department_id,$id)->result();
		$data['dept'] = $get_dep->department_id;
		$data['sch'] = $this->Mscheduling->get_id($id)->row();
		$data['emp'] = $this->Mscheduling->list_emp($get_dep->department_id,$id)->result();
		$data['content'] = 'SE/attendance';
		$this->load->view('index', $data);	
	}

	public function submit()
	{		
		$this->db->insert('attendance_meet', array(
			'employee_id' => $this->input->post('emp'),
			'scheduling_id' => $this->input->post('sch_id'),
			'department_id' => $this->input->post('dept')
		));	
		
		$this->session->set_flashdata("msg", "
		$(document).ready(function() {
    		$('#delay-modal').modal('show');        
    		setTimeout(function() {
    			$('#delay-modal').modal('hide');          					
				}, 2500);
		});");

		redirect('scheduling_ex/attendance/'.$this->input->post('sch_id'),'refresh');
	}

	public function delete($id,$sch)
	{
		$this->db->where('id', $id);
		$this->db->delete('attendance_meet');

		redirect('scheduling_ex/attendance/'.$sch,'refresh');		
	}

	public function form($id)
	{	
		$sch_id = base64_decode($id);
		$finalcek = $this->db->get_where('scheduling', array('scheduling_id' => $sch_id, 'final' => '0'))->num_rows();

		if (empty($finalcek)) {
			 
			redirect('scheduling_ex','refresh');

		}else{
			$cek = $this->db->get_where('mast_global', array('scheduling_id' => $sch_id))->num_rows();
			if (empty($cek)) {
				$this->db->insert('mast_global', array('scheduling_id' => $sch_id));
			}
			$data['id'] = base64_decode($id);
			$cek = $this->db->get_where('meeting_pp', array('scheduling_id' => $sch_id))->num_rows();
			if (empty($cek)) {
				$this->_insert_new($sch_id);
			}
			$data['get'] =  $this->Mscheduling->get_id($sch_id)->row();					
			$data['global'] = $this->db->get_where('mast_global', array('scheduling_id' => $sch_id))->row();											
			$data['pp'] = $this->db->get_where('meeting_pp', array('scheduling_id' => $sch_id))->row();
			$data['pl'] = $this->db->get_where('meeting_pl', array('scheduling_id' => $sch_id))->row();
			$data['pl2'] = $this->db->get_where('meeting_pl2', array('scheduling_id' => $sch_id))->row();
			$data['mast'] = $this->db->get_where('meeting_mast', array('scheduling_id' => $sch_id))->row();
			
			if ($this->session->userdata('department') == "Technical") {
				$data['content'] = 'EM/f_pp_technical';
			}elseif($this->session->userdata('department') == "Cutting"){
				$data['content'] = 'EM/f_pp_cutting';			
			}elseif($this->session->userdata('department') == "PCU"){
				$data['content'] = 'EM/f_pp_pcu';			
			}elseif($this->session->userdata('department') == "Autonomation"){
				$data['content'] = '';			
			}elseif($this->session->userdata('department') == "Engineering"){
				$data['content'] = 'EM/f_pp_mechanic';			
			}elseif($this->session->userdata('department') == "Industrial Engineering"){
				$data['content'] = 'EM/f_pp_ie';			
			}elseif($this->session->userdata('department') == "Quality Inspection"){
				$data['content'] = 'EM/f_pp_lab';			
			}elseif($this->session->userdata('department') == "Quality Assurance"){
				$data['content'] = 'EM/f_pp_quality';			
			}else{
				$data['content'] = 'EM/f_pp_planning';						
			}

			$this->load->view('index', $data);				
		}

	}

	public function _insert_new($id)
	{
		$this->db->insert('meeting_pp', array('scheduling_id' => $id));
		$this->db->insert('meeting_pl', array('scheduling_id' => $id));
		$this->db->insert('meeting_pl2', array('scheduling_id' => $id));
		$this->db->insert('meeting_mast', array('scheduling_id' => $id));
	}	

	public function form_pra($id)
	{
		$sch_id = base64_decode($id);
		$cek = $this->db->get_where('pra', array('scheduling_id' => $sch_id))->num_rows();
		if (empty($cek)) {
			$this->db->insert('pra', array(
				'scheduling_id' => $sch_id
			));	
		}
		$data['content'] = 'form_rpa';
		$data['get_pra'] = $this->db->get_where('pra', array('scheduling_id' => $sch_id))->row();
		$data['att'] = $this->db->get_where('atteendees_pra', array('scheduling_id' => $sch_id))->result();
		$data['get'] = $this->Mscheduling->get_id($sch_id)->row();
		$this->load->view('index', $data);
	}	

	public function form_pdra($id)
	{
		$sch_id = base64_decode($id);
		$cek = $this->db->get_where('pdra', array('scheduling_id' => $sch_id))->num_rows();
		if (empty($cek)) {
			$this->db->insert('pdra', array(
				'scheduling_id' => $sch_id
			));				
		}
		$data['get_pdra'] = $this->db->get_where('pdra', array('scheduling_id' => $sch_id))->row();
		$data['pdra_ext'] = $this->db->get_where('pdra_extend', array('scheduling_id' => $sch_id))->result();
		$data['cek'] = $this->db->get_where('pdra_extend', array('scheduling_id' => $sch_id))->num_rows();
		$data['get'] = $this->Mscheduling->get_id($sch_id)->row();
		$data['content'] = 'form_pdra';
		$this->load->view('index', $data);
	}

	public function pra2($id)
	{
		$sch_id = base64_decode($id);
		$get = $this->db->get_where('pra2_main', array('scheduling_id' => $sch_id));
		if ($get->num_rows() > 0) {
			$data['pra'] = $get->row();
		}else{
			$this->db->insert('pra2_main', array(
				'scheduling_id' => $sch_id
			));
			$get2 = $this->db->get_where('pra2_main', array('scheduling_id' => $sch_id));			
			$data['pra'] = $get2->row();
		}
		$data['id'] = $sch_id;
		$data['get'] = $this->Mscheduling->get_id($sch_id)->row();		
		$data['content'] = '_new/form_pra_unadmin';
		$this->load->view('index', $data);

	}
	

}

/* End of file Scheduling_ex.php */
/* Location: ./application/controllers/Scheduling_ex.php */